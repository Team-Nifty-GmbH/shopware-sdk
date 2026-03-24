<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNiftyGmbH\Shopware\Requests\Category\GetCategoryList;
use TeamNiftyGmbH\Shopware\Requests\Category\SearchCategory;
use TeamNiftyGmbH\Shopware\Requests\Product\AggregateProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\CreateProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\DeleteProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\GetProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\GetProductList;
use TeamNiftyGmbH\Shopware\Requests\Product\SearchProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\UpdateProduct;
use TeamNiftyGmbH\Shopware\Requests\Tax\GetTax;
use TeamNiftyGmbH\Shopware\Requests\Tax\GetTaxList;
use TeamNiftyGmbH\Shopware\Shopware;
use TeamNiftyGmbH\Shopware\Support\CriteriaBuilder;

function fixture(string $name): array
{
    return json_decode(
        file_get_contents(__DIR__ . '/../Fixtures/' . $name . '.json'),
        true
    );
}

function mockShopware(array $mocks): Shopware
{
    $shopware = new Shopware(
        baseUrl: 'https://test-shop.example.com/api',
        clientId: 'test-client-id',
        clientSecret: 'test-client-secret',
    );

    $mockClient = new MockClient($mocks);
    $shopware->withMockClient($mockClient);

    return $shopware;
}

// --- Product List (JSON:API format) ---

test('can list products', function (): void {
    $shopware = mockShopware([
        GetProductList::class => MockResponse::make(fixture('product-list'), 200),
    ]);

    $response = $shopware->product()->getProductList(limit: 5);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()->toHaveCount(5)
        ->and($response->json('meta.total'))->toBe(5);
});

// --- Product Detail (JSON:API format) ---

test('can get a single product', function (): void {
    $fixture = fixture('product-detail');
    $shopware = mockShopware([
        GetProduct::class => MockResponse::make($fixture, 200),
    ]);

    $productId = $fixture['data']['id'];
    $response = $shopware->product()->getProduct($productId);

    expect($response->status())->toBe(200)
        ->and($response->json('data.id'))->toBe($productId)
        ->and($response->json('data.type'))->toBe('product')
        ->and($response->json('data.attributes'))->toBeArray();
});

// --- Product Create ---

test('can create a product', function (): void {
    $fixture = fixture('product-created');
    $shopware = mockShopware([
        CreateProduct::class => MockResponse::make($fixture, 200),
    ]);

    $response = $shopware->product()->createProduct([
        'name' => 'SDK Test Fixture Product',
        'productNumber' => 'SDK-FIXTURE-004',
        'stock' => 42,
        'taxId' => '0193211f74b37001992c7534d698caf5',
        'price' => [[
            'currencyId' => 'b7d2554b0ce847cd82f3ac9bd1c0dfca',
            'gross' => 19.99,
            'net' => 16.80,
            'linked' => true,
        ]],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('data.id'))->toBeString()
        ->and($response->json('data.attributes.productNumber'))->toBe('SDK-FIXTURE-004')
        ->and($response->json('data.attributes.stock'))->toBe(42);
});

// --- Product Update ---

test('can update a product', function (): void {
    $shopware = mockShopware([
        UpdateProduct::class => MockResponse::make([], 204),
    ]);

    $response = $shopware->product()->updateProduct('019321209b0872ad8a947e66205ea267', [
        'name' => 'Updated T-Shirt',
        'stock' => 42,
    ]);

    expect($response->status())->toBe(204);
});

// --- Product Delete ---

test('can delete a product', function (): void {
    $shopware = mockShopware([
        DeleteProduct::class => MockResponse::make([], 204),
    ]);

    $response = $shopware->product()->deleteProduct('019321209b0872ad8a947e66205ea267');

    expect($response->status())->toBe(204);
});

test('get returns 404 for non-existent product', function (): void {
    $shopware = mockShopware([
        GetProduct::class => MockResponse::make(fixture('product-404'), 404),
    ]);

    $response = $shopware->product()->getProduct('00000000000000000000000000000000');

    expect($response->status())->toBe(404)
        ->and($response->json('errors'))->toBeArray()->not->toBeEmpty();
});

// --- Product Search (JSON:API format) ---

test('can search products with criteria', function (): void {
    $shopware = mockShopware([
        SearchProduct::class => MockResponse::make(fixture('product-search'), 200),
    ]);

    $criteria = CriteriaBuilder::make()
        ->equals('active', true)
        ->sort('name')
        ->limit(25)
        ->association('tax')
        ->association('manufacturer')
        ->toArray();

    $response = $shopware->product()->searchProduct($criteria);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()->toHaveCount(5)
        ->and($response->json('meta.total'))->toBe(5);
});

// --- Product Aggregation ---

test('can aggregate products', function (): void {
    $shopware = mockShopware([
        AggregateProduct::class => MockResponse::make(fixture('product-aggregation'), 200),
    ]);

    $criteria = CriteriaBuilder::make()
        ->statsAggregation('stock-stats', 'stock')
        ->toArray();

    $response = $shopware->product()->aggregateProduct($criteria);

    expect($response->status())->toBe(200)
        ->and($response->json('aggregations.stock-stats'))->toBeArray()
        ->and($response->json('aggregations.stock-stats.min'))->toBe('10')
        ->and($response->json('aggregations.stock-stats.max'))->toBe('50');
});

// --- Response structure verification ---

test('product list has JSON:API structure', function (): void {
    $shopware = mockShopware([
        GetProductList::class => MockResponse::make(fixture('product-list'), 200),
    ]);

    $response = $shopware->product()->getProductList();
    $firstItem = $response->json('data.0');

    expect($firstItem)->toHaveKeys(['id', 'type', 'attributes', 'relationships'])
        ->and($firstItem['type'])->toBe('product')
        ->and($firstItem['attributes'])->toBeArray();
});

test('product detail has JSON:API structure', function (): void {
    $shopware = mockShopware([
        GetProduct::class => MockResponse::make(fixture('product-detail'), 200),
    ]);

    $response = $shopware->product()->getProduct('test');
    $data = $response->json('data');

    expect($data)->toHaveKeys(['id', 'type', 'attributes', 'relationships'])
        ->and($data['type'])->toBe('product');
});

// --- Categories ---

test('can list categories', function (): void {
    $shopware = mockShopware([
        GetCategoryList::class => MockResponse::make(fixture('category-list'), 200),
    ]);

    $response = $shopware->category()->getCategoryList(limit: 25);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()->toHaveCount(9)
        ->and($response->json('meta.total'))->toBe(9);
});

test('can search categories', function (): void {
    $shopware = mockShopware([
        SearchCategory::class => MockResponse::make(fixture('category-list'), 200),
    ]);

    $response = $shopware->category()->searchCategory(['limit' => 5]);

    expect($response->status())->toBe(200);
});

// --- Tax ---

test('can list taxes', function (): void {
    $shopware = mockShopware([
        GetTaxList::class => MockResponse::make(fixture('tax-list'), 200),
    ]);

    $response = $shopware->tax()->getTaxList(limit: 10);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()->toHaveCount(3)
        ->and($response->json('total'))->toBe(3);
});

test('can get single tax', function (): void {
    $fixture = fixture('tax-detail');
    $shopware = mockShopware([
        GetTax::class => MockResponse::make($fixture, 200),
    ]);

    $taxId = $fixture['data']['id'];
    $response = $shopware->tax()->getTax($taxId);

    expect($response->status())->toBe(200)
        ->and($response->json('data.id'))->toBe($taxId)
        ->and($response->json('data.type'))->toBe('tax')
        ->and($response->json('data.attributes'))->toBeArray();
});

// --- Pagination ---

test('can paginate through results', function (): void {
    $request = new class(limit: 2) extends GetCategoryList implements Paginatable {};

    $shopware = mockShopware([
        MockResponse::make(fixture('category-list-paginated'), 200),
        MockResponse::make(fixture('category-list-page2'), 200),
    ]);

    $paginator = $shopware->paginate($request);

    $allItems = [];
    $pageCount = 0;

    foreach ($paginator as $response) {
        $items = $response->json('data');
        $allItems = array_merge($allItems, $items);
        $pageCount++;

        if ($pageCount >= 10) {
            break;
        }
    }

    expect($pageCount)->toBeGreaterThanOrEqual(1)
        ->and($allItems)->not->toBeEmpty();
});
