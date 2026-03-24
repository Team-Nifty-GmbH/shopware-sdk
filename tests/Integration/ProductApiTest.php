<?php

use TeamNiftyGmbH\Shopware\Support\CriteriaBuilder;

test('can list products', function (): void {
    $response = $this->shopware()->product()->getProductList(limit: 5);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()
        ->and($response->json('total'))->toBeInt();
})->group('integration');

test('can create a product', function (): void {
    // First get a tax ID
    $taxResponse = $this->shopware()->tax()->getTaxList(limit: 1);
    $taxId = $taxResponse->json('data.0.id');

    // Get default currency
    $currencyResponse = $this->shopware()->currency()->getCurrencyList(limit: 1);
    $currencyId = $currencyResponse->json('data.0.id');

    $productNumber = 'SDK-TEST-' . substr(md5(microtime()), 0, 8);

    $response = $this->shopware()->product()->createProduct([
        'name' => 'SDK Integration Test Product',
        'productNumber' => $productNumber,
        'stock' => 99,
        'taxId' => $taxId,
        'price' => [[
            'currencyId' => $currencyId,
            'gross' => 29.99,
            'net' => 25.20,
            'linked' => true,
        ]],
    ], response: 'detail');

    expect($response->status())->toBeIn([200, 204])
        ->and($response->json('data.productNumber'))->toBe($productNumber)
        ->and($response->json('data.stock'))->toBe(99);

    // Cleanup
    $productId = $response->json('data.id');
    $this->shopware()->product()->deleteProduct($productId);
})->group('integration');

test('can get a single product', function (): void {
    $taxResponse = $this->shopware()->tax()->getTaxList(limit: 1);
    $taxId = $taxResponse->json('data.0.id');
    $currencyResponse = $this->shopware()->currency()->getCurrencyList(limit: 1);
    $currencyId = $currencyResponse->json('data.0.id');

    $productNumber = 'SDK-TEST-' . substr(md5(microtime()), 0, 8);
    $createResponse = $this->shopware()->product()->createProduct([
        'name' => 'SDK Get Test Product',
        'productNumber' => $productNumber,
        'stock' => 50,
        'taxId' => $taxId,
        'price' => [[
            'currencyId' => $currencyId,
            'gross' => 19.99,
            'net' => 16.80,
            'linked' => true,
        ]],
    ], response: 'detail');

    $productId = $createResponse->json('data.id');

    // Now get it
    $response = $this->shopware()->product()->getProduct($productId);

    expect($response->status())->toBe(200)
        ->and($response->json('data.id'))->toBe($productId)
        ->and($response->json('data.productNumber'))->toBe($productNumber);

    // Cleanup
    $this->shopware()->product()->deleteProduct($productId);
})->group('integration');

test('can update a product', function (): void {
    $taxResponse = $this->shopware()->tax()->getTaxList(limit: 1);
    $taxId = $taxResponse->json('data.0.id');
    $currencyResponse = $this->shopware()->currency()->getCurrencyList(limit: 1);
    $currencyId = $currencyResponse->json('data.0.id');

    $productNumber = 'SDK-TEST-' . substr(md5(microtime()), 0, 8);
    $createResponse = $this->shopware()->product()->createProduct([
        'name' => 'SDK Update Test',
        'productNumber' => $productNumber,
        'stock' => 10,
        'taxId' => $taxId,
        'price' => [[
            'currencyId' => $currencyId,
            'gross' => 9.99,
            'net' => 8.39,
            'linked' => true,
        ]],
    ], response: 'detail');

    $productId = $createResponse->json('data.id');

    // Update
    $this->shopware()->product()->updateProduct($productId, [
        'name' => 'SDK Update Test - Updated',
        'stock' => 42,
    ]);

    // Verify
    $getResponse = $this->shopware()->product()->getProduct($productId);
    expect($getResponse->json('data.name'))->toBe('SDK Update Test - Updated')
        ->and($getResponse->json('data.stock'))->toBe(42);

    // Cleanup
    $this->shopware()->product()->deleteProduct($productId);
})->group('integration');

test('can delete a product', function (): void {
    $taxResponse = $this->shopware()->tax()->getTaxList(limit: 1);
    $taxId = $taxResponse->json('data.0.id');
    $currencyResponse = $this->shopware()->currency()->getCurrencyList(limit: 1);
    $currencyId = $currencyResponse->json('data.0.id');

    $productNumber = 'SDK-TEST-' . substr(md5(microtime()), 0, 8);
    $createResponse = $this->shopware()->product()->createProduct([
        'name' => 'SDK Delete Test',
        'productNumber' => $productNumber,
        'stock' => 1,
        'taxId' => $taxId,
        'price' => [[
            'currencyId' => $currencyId,
            'gross' => 5.00,
            'net' => 4.20,
            'linked' => true,
        ]],
    ], response: 'detail');

    $productId = $createResponse->json('data.id');

    // Delete
    $deleteResponse = $this->shopware()->product()->deleteProduct($productId);
    expect($deleteResponse->status())->toBe(204);

    // Verify it's gone
    $getResponse = $this->shopware()->product()->getProduct($productId);
    expect($getResponse->status())->toBe(404);
})->group('integration');

test('can search products with criteria', function (): void {
    $criteria = CriteriaBuilder::make()
        ->limit(5)
        ->sort('name')
        ->toArray();

    $response = $this->shopware()->product()->searchProduct($criteria);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()
        ->and($response->json('total'))->toBeGreaterThanOrEqual(0);
})->group('integration');

test('can search with equals filter', function (): void {
    $criteria = CriteriaBuilder::make()
        ->equals('active', true)
        ->limit(5)
        ->toArray();

    $response = $this->shopware()->product()->searchProduct($criteria);

    expect($response->status())->toBe(200);
})->group('integration');

test('can search with associations', function (): void {
    $criteria = CriteriaBuilder::make()
        ->limit(3)
        ->association('tax')
        ->association('manufacturer')
        ->toArray();

    $response = $this->shopware()->product()->searchProduct($criteria);

    expect($response->status())->toBe(200);

    // If there are products, they should have tax loaded
    $data = $response->json('data');
    if (count($data) > 0) {
        expect($data[0])->toHaveKey('tax');
    }
})->group('integration');

test('can aggregate products', function (): void {
    $criteria = CriteriaBuilder::make()
        ->statsAggregation('stock-stats', 'stock')
        ->toArray();

    $response = $this->shopware()->product()->aggregateProduct($criteria);

    expect($response->status())->toBe(200)
        ->and($response->json('aggregations'))->toBeArray();
})->group('integration');

test('dto casting works with real response', function (): void {
    $response = $this->shopware()->product()->getProductList(limit: 1);

    $dto = $response->dto();

    expect($dto)->toBeArray();

    if (count($dto) > 0) {
        expect($dto[0])->toBeInstanceOf(TeamNiftyGmbH\Shopware\Dto\Product::class)
            ->and($dto[0]->id)->toBeString();
    }
})->group('integration');
