<?php

use Saloon\Enums\Method;
use TeamNiftyGmbH\Shopware\Requests\Product\AggregateProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\CreateProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\DeleteProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\GetProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\GetProductList;
use TeamNiftyGmbH\Shopware\Requests\Product\SearchProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\UpdateProduct;

test('GetProduct resolves correct endpoint', function (): void {
    $request = new GetProduct('test-uuid');

    expect($request->resolveEndpoint())->toBe('/product/test-uuid')
        ->and($request->getMethod())->toBe(Method::GET);
});

test('GetProductList resolves correct endpoint', function (): void {
    $request = new GetProductList(limit: 10, page: 2);

    expect($request->resolveEndpoint())->toBe('/product')
        ->and($request->getMethod())->toBe(Method::GET);
});

test('GetProductList builds query params', function (): void {
    $request = new GetProductList(limit: 10, page: 2, swQuery: '{"filter":[]}');

    expect($request->defaultQuery())->toBe([
        'limit' => 10,
        'page' => 2,
        'query' => '{"filter":[]}',
    ]);
});

test('GetProductList excludes null query params', function (): void {
    $request = new GetProductList();

    expect($request->defaultQuery())->toBe([]);
});

test('CreateProduct is POST with body', function (): void {
    $data = ['name' => 'Test Product', 'productNumber' => 'SW-001'];
    $request = new CreateProduct($data);

    expect($request->resolveEndpoint())->toBe('/product')
        ->and($request->getMethod())->toBe(Method::POST)
        ->and($request->defaultBody())->toBe($data);
});

test('CreateProduct passes response query param', function (): void {
    $request = new CreateProduct(['name' => 'Test'], response: 'detail');

    expect($request->defaultQuery())->toBe(['_response' => 'detail']);
});

test('UpdateProduct is PATCH with id and body', function (): void {
    $data = ['name' => 'Updated'];
    $request = new UpdateProduct('test-uuid', $data);

    expect($request->resolveEndpoint())->toBe('/product/test-uuid')
        ->and($request->getMethod())->toBe(Method::PATCH)
        ->and($request->defaultBody())->toBe($data);
});

test('DeleteProduct is DELETE with id', function (): void {
    $request = new DeleteProduct('test-uuid');

    expect($request->resolveEndpoint())->toBe('/product/test-uuid')
        ->and($request->getMethod())->toBe(Method::DELETE);
});

test('SearchProduct is POST with body', function (): void {
    $criteria = ['filter' => [['type' => 'equals', 'field' => 'active', 'value' => true]]];
    $request = new SearchProduct($criteria);

    expect($request->resolveEndpoint())->toBe('/search/product')
        ->and($request->getMethod())->toBe(Method::POST)
        ->and($request->defaultBody())->toBe($criteria);
});

test('SearchProduct passes sw-include-search-info header', function (): void {
    $request = new SearchProduct(swIncludeSearchInfo: '1');

    expect($request->defaultHeaders())->toBe(['sw-include-search-info' => '1']);
});

test('AggregateProduct is POST with body', function (): void {
    $criteria = ['aggregations' => [['name' => 'avg-price', 'type' => 'avg', 'field' => 'price']]];
    $request = new AggregateProduct($criteria);

    expect($request->resolveEndpoint())->toBe('/aggregate/product')
        ->and($request->getMethod())->toBe(Method::POST)
        ->and($request->defaultBody())->toBe($criteria);
});
