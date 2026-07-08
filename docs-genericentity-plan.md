# shopware-sdk: GenericEntity Resource Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax.

**Goal:** Add a `GenericEntity` resource to the Saloon-based Shopware Admin API SDK that performs CRUD + search against an arbitrary entity name (e.g. `custom_entity_blog`), so custom entities and any not-yet-hand-written entity can be reached without a dedicated resource class.

**Architecture:** Six parameterized Request classes under `Requests/GenericEntity/`, a `GenericEntity` resource that forwards to them, and a `Shopware::entity(string $entityName): GenericEntity` connector method. Shopware addresses entities in the URL by dasherizing the technical name (underscores → hyphens): `custom_entity_blog` → `/custom-entity-blog`, `product_manufacturer` → `/product-manufacturer`.

**Tech Stack:** PHP 8.1+, Saloon 4, Pest 3 (plain PHP SDK, no framework TestCase — see tests/Pest.php).

## Global Constraints

- Namespace `TeamNiftyGmbH\Shopware`, tests `TeamNiftyGmbH\Shopware\Tests`
- Follow the EXACT existing request/resource conventions (study `src/Requests/Product/*.php` and `src/Resource/Product.php` before writing)
- Endpoint dasherization: `str_replace('_', '-', $entityName)` — the entity name is passed as-is (already snake_case) and only underscores become hyphens
- Requests: Create/GetList = collection endpoints (`/{entity}`), Get/Update/Delete = item endpoints (`/{entity}/{id}`), Search = `/search/{entity}`
- Run tests `vendor/bin/pest`; format `vendor/bin/pint --dirty`; commit messages English, no AI/Claude mentions, no test plan
- The connector method list in `src/Shopware.php` is alphabetically ordered by method name — insert `entity()` in the right alphabetical position (after `emailSupportValidation`/before `experimental`-area; place it where `e`-methods sit, adjust to actual ordering)

---

### Task 1: GenericEntity request classes

**Files:**
- Create: `src/Requests/GenericEntity/CreateEntity.php`
- Create: `src/Requests/GenericEntity/GetEntity.php`
- Create: `src/Requests/GenericEntity/GetEntityList.php`
- Create: `src/Requests/GenericEntity/UpdateEntity.php`
- Create: `src/Requests/GenericEntity/DeleteEntity.php`
- Create: `src/Requests/GenericEntity/SearchEntity.php`
- Test: `tests/Unit/GenericEntityRequestTest.php`

**Interfaces:**
- Produces (consumed by Task 2): each request's constructor takes `string $entityName` first, then operation params; `resolveEndpoint()` returns the dasherized path; methods/bodies per the Shopware REST convention. No `createDtoFromResponse()` (generic — callers read `->json()` themselves).

- [ ] **Step 1: Write the failing test**

Create `tests/Unit/GenericEntityRequestTest.php`:

```php
<?php

use Saloon\Enums\Method;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\CreateEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\DeleteEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\GetEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\GetEntityList;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\SearchEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\UpdateEntity;

test('dasherizes the entity name in the endpoint', function (): void {
    expect((new GetEntity('custom_entity_blog', 'id-1'))->resolveEndpoint())
        ->toBe('/custom-entity-blog/id-1')
        ->and((new CreateEntity('product_manufacturer', []))->resolveEndpoint())
        ->toBe('/product-manufacturer')
        ->and((new SearchEntity('custom_entity_blog'))->resolveEndpoint())
        ->toBe('/search/custom-entity-blog');
});

test('CreateEntity is POST with body', function (): void {
    $data = ['title' => 'Hello'];
    $request = new CreateEntity('custom_entity_blog', $data);

    expect($request->resolveEndpoint())->toBe('/custom-entity-blog')
        ->and($request->getMethod())->toBe(Method::POST)
        ->and($request->defaultBody())->toBe($data);
});

test('CreateEntity passes response query param and filters null', function (): void {
    expect((new CreateEntity('custom_entity_blog', [], 'detail'))->defaultQuery())
        ->toBe(['_response' => 'detail'])
        ->and((new CreateEntity('custom_entity_blog', []))->defaultQuery())
        ->toBe([]);
});

test('GetEntity is GET on the item endpoint', function (): void {
    $request = new GetEntity('custom_entity_blog', 'abc');

    expect($request->resolveEndpoint())->toBe('/custom-entity-blog/abc')
        ->and($request->getMethod())->toBe(Method::GET);
});

test('GetEntityList is GET on the collection endpoint with query', function (): void {
    $request = new GetEntityList('custom_entity_blog', limit: 10, page: 2, swQuery: '{"filter":[]}');

    expect($request->resolveEndpoint())->toBe('/custom-entity-blog')
        ->and($request->getMethod())->toBe(Method::GET)
        ->and($request->defaultQuery())->toBe([
            'limit' => 10,
            'page' => 2,
            'query' => '{"filter":[]}',
        ]);

    expect((new GetEntityList('custom_entity_blog'))->defaultQuery())->toBe([]);
});

test('UpdateEntity is PATCH on the item endpoint with body', function (): void {
    $data = ['title' => 'Updated'];
    $request = new UpdateEntity('custom_entity_blog', 'abc', $data);

    expect($request->resolveEndpoint())->toBe('/custom-entity-blog/abc')
        ->and($request->getMethod())->toBe(Method::PATCH)
        ->and($request->defaultBody())->toBe($data);
});

test('DeleteEntity is DELETE on the item endpoint', function (): void {
    $request = new DeleteEntity('custom_entity_blog', 'abc');

    expect($request->resolveEndpoint())->toBe('/custom-entity-blog/abc')
        ->and($request->getMethod())->toBe(Method::DELETE);
});

test('SearchEntity is POST on the search endpoint with body', function (): void {
    $criteria = ['limit' => 1, 'filter' => []];
    $request = new SearchEntity('custom_entity_blog', $criteria);

    expect($request->resolveEndpoint())->toBe('/search/custom-entity-blog')
        ->and($request->getMethod())->toBe(Method::POST)
        ->and($request->defaultBody())->toBe($criteria);
});
```

- [ ] **Step 2: Run test to verify it fails**

Run: `vendor/bin/pest tests/Unit/GenericEntityRequestTest.php`
Expected: FAIL — request classes not found

- [ ] **Step 3: Write the six request classes**

Study `src/Requests/Product/CreateProduct.php`, `GetProduct.php`, `GetProductList.php`, `UpdateProduct.php`, `DeleteProduct.php`, `SearchProduct.php` first and mirror their structure exactly (imports, docblocks, `HasBody`/`HasJsonBody` traits). Add a `protected function endpointEntity(): string { return str_replace('_', '-', $this->entityName); }` helper in each, or inline the `str_replace`.

`src/Requests/GenericEntity/CreateEntity.php`:

```php
<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateEntity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $entityName,
        protected array $data,
        protected ?string $response = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName);
    }

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }
}
```

`src/Requests/GenericEntity/GetEntity.php`:

```php
<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetEntity extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $entityName,
        protected string $id,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName).'/'.$this->id;
    }
}
```

`src/Requests/GenericEntity/GetEntityList.php` (mirror `GetProductList` for the query-building; check its exact `defaultQuery` keys — `limit`, `page`, `query`):

```php
<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetEntityList extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $entityName,
        protected ?int $limit = null,
        protected ?int $page = null,
        protected ?string $swQuery = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName);
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'page' => $this->page,
            'query' => $this->swQuery,
        ], fn ($value): bool => $value !== null);
    }
}
```

(Verify against `GetProductList::defaultQuery()` that the array_filter predicate matches — if the existing code uses plain `array_filter` without a callback, `page` value 0 would be dropped; mirror exactly what GetProductList does, which the test expects to keep `limit`/`page`/`query` when set and drop nulls.)

`src/Requests/GenericEntity/UpdateEntity.php`:

```php
<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateEntity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(
        protected string $entityName,
        protected string $id,
        protected array $data,
        protected ?string $response = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName).'/'.$this->id;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }
}
```

`src/Requests/GenericEntity/DeleteEntity.php`:

```php
<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteEntity extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(
        protected string $entityName,
        protected string $id,
        protected ?string $response = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName).'/'.$this->id;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }
}
```

`src/Requests/GenericEntity/SearchEntity.php`:

```php
<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class SearchEntity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $entityName,
        protected array $data = [],
    ) {}

    public function resolveEndpoint(): string
    {
        return '/search/'.str_replace('_', '-', $this->entityName);
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
```

- [ ] **Step 4: Run test to verify it passes**

Run: `vendor/bin/pest tests/Unit/GenericEntityRequestTest.php`
Expected: PASS (8 tests). If `GetEntityList` query assertion fails, align `defaultQuery()` with the real `GetProductList` implementation.

- [ ] **Step 5: Pint + full suite + commit**

```bash
vendor/bin/pint --dirty && vendor/bin/pest
git add src/Requests/GenericEntity tests/Unit/GenericEntityRequestTest.php
git commit -m "Add generic entity request classes"
```

---

### Task 2: GenericEntity resource + connector method

**Files:**
- Create: `src/Resource/GenericEntity.php`
- Modify: `src/Shopware.php` (add `use` import + `entity()` method in alphabetical position)
- Test: `tests/Unit/GenericEntityResourceTest.php`

**Interfaces:**
- Consumes: the six requests (Task 1)
- Produces: `Shopware::entity(string $entityName): GenericEntity`; resource methods `create(array $data, ?string $response = null)`, `get(string $id)`, `getList(?int $limit = null, ?int $page = null, ?string $swQuery = null)`, `update(string $id, array $data, ?string $response = null)`, `delete(string $id, ?string $response = null)`, `search(array $data = [])` — each forwards to `$this->connector->send(new ...Entity($this->entityName, ...))`. The resource stores the entity name from construction.

- [ ] **Step 1: Write the failing test**

Create `tests/Unit/GenericEntityResourceTest.php`. Study `tests/Unit/ShopwareConnectorTest.php` for how the connector is instantiated in tests (OAuth config etc.) and reuse that setup. The resource test asserts:
1. `Shopware::entity('custom_entity_blog')` returns a `GenericEntity` instance
2. The resource carries the entity name (assert via a request it builds, or a getter) — simplest: give `GenericEntity` a `public function entityName(): string` and assert it returns `'custom_entity_blog'`

```php
<?php

use TeamNiftyGmbH\Shopware\Resource\GenericEntity;
use TeamNiftyGmbH\Shopware\Shopware;

test('entity() returns a GenericEntity for the given name', function (): void {
    // Reuse the connector construction from ShopwareConnectorTest.php
    $connector = /* build a Shopware connector as that test does */;

    $resource = $connector->entity('custom_entity_blog');

    expect($resource)->toBeInstanceOf(GenericEntity::class)
        ->and($resource->entityName())->toBe('custom_entity_blog');
});
```

If constructing the connector needs credentials, follow exactly what `ShopwareConnectorTest.php` does (it must already build one). If that is impractical, test `GenericEntity` directly by constructing it with a mock connector — but prefer the real connector path.

- [ ] **Step 2: Run test to verify it fails**

Run: `vendor/bin/pest tests/Unit/GenericEntityResourceTest.php`
Expected: FAIL — `entity()` / `GenericEntity` not found

- [ ] **Step 3: Write the resource + connector method**

Study `src/Resource/CustomEntity.php` and `src/Resource/Product.php` for the `BaseResource` shape. Create `src/Resource/GenericEntity.php`:

```php
<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\CreateEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\DeleteEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\GetEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\GetEntityList;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\SearchEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\UpdateEntity;

class GenericEntity extends BaseResource
{
    public function __construct(Connector $connector, protected string $entityName)
    {
        parent::__construct($connector);
    }

    public function entityName(): string
    {
        return $this->entityName;
    }

    public function create(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateEntity($this->entityName, $data, $response));
    }

    public function get(string $id): Response
    {
        return $this->connector->send(new GetEntity($this->entityName, $id));
    }

    public function getList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetEntityList($this->entityName, $limit, $page, $swQuery));
    }

    public function update(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateEntity($this->entityName, $id, $data, $response));
    }

    public function delete(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteEntity($this->entityName, $id, $response));
    }

    public function search(array $data = []): Response
    {
        return $this->connector->send(new SearchEntity($this->entityName, $data));
    }
}
```

Verify `BaseResource`'s constructor signature (open vendor `saloonphp/saloon` `BaseResource` — it takes `Connector $connector`). If the parent constructor property is named/typed differently, match it; the goal is `parent::__construct($connector)` plus storing `$entityName`.

In `src/Shopware.php` add the import `use TeamNiftyGmbH\Shopware\Resource\GenericEntity;` (alphabetical among the `use` block) and the method in alphabetical position among the connector methods:

```php
public function entity(string $entityName): GenericEntity
{
    return new GenericEntity($this, $entityName);
}
```

- [ ] **Step 4: Run test to verify it passes**

Run: `vendor/bin/pest tests/Unit/GenericEntityResourceTest.php`
Expected: PASS

- [ ] **Step 5: Pint + full suite + commit**

```bash
vendor/bin/pint --dirty && vendor/bin/pest
git add src/Resource/GenericEntity.php src/Shopware.php tests/Unit/GenericEntityResourceTest.php
git commit -m "Add GenericEntity resource and entity() connector method"
```
