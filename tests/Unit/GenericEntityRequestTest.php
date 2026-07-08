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
