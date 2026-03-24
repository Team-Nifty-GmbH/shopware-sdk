<?php

use TeamNiftyGmbH\Shopware\Dto\Category;
use TeamNiftyGmbH\Shopware\Dto\Criteria;
use TeamNiftyGmbH\Shopware\Dto\Customer;
use TeamNiftyGmbH\Shopware\Dto\OauthClientCredentialsGrant;
use TeamNiftyGmbH\Shopware\Dto\Order;
use TeamNiftyGmbH\Shopware\Dto\Product;
use TeamNiftyGmbH\Shopware\Dto\ProductJsonApi;
use TeamNiftyGmbH\Shopware\Dto\Tax;

test('Product DTO can be instantiated', function (): void {
    $product = new Product(
        id: 'test-uuid',
        name: 'Test Product',
        productNumber: 'SW-001',
        stock: 100,
        active: true,
    );

    expect($product->id)->toBe('test-uuid')
        ->and($product->name)->toBe('Test Product')
        ->and($product->productNumber)->toBe('SW-001')
        ->and($product->stock)->toBe(100)
        ->and($product->active)->toBeTrue();
});

test('Product DTO defaults to null', function (): void {
    $product = new Product();

    expect($product->id)->toBeNull()
        ->and($product->name)->toBeNull()
        ->and($product->stock)->toBeNull();
});

test('Order DTO can be instantiated', function (): void {
    $order = new Order(
        id: 'order-uuid',
        orderNumber: 'ORD-001',
    );

    expect($order->id)->toBe('order-uuid')
        ->and($order->orderNumber)->toBe('ORD-001');
});

test('Customer DTO can be instantiated', function (): void {
    $customer = new Customer(
        id: 'customer-uuid',
        email: 'test@example.com',
        firstName: 'John',
        lastName: 'Doe',
    );

    expect($customer->id)->toBe('customer-uuid')
        ->and($customer->email)->toBe('test@example.com');
});

test('Category DTO can be instantiated', function (): void {
    $category = new Category(
        id: 'cat-uuid',
        name: 'Electronics',
        active: true,
    );

    expect($category->id)->toBe('cat-uuid')
        ->and($category->name)->toBe('Electronics');
});

test('Tax DTO can be instantiated', function (): void {
    $tax = new Tax(
        id: 'tax-uuid',
        taxRate: 19.0,
        name: 'Standard Rate',
    );

    expect($tax->taxRate)->toBe(19.0)
        ->and($tax->name)->toBe('Standard Rate');
});

test('ProductJsonApi DTO has json api properties', function (): void {
    $dto = new ProductJsonApi(
        id: 'uuid',
        type: 'product',
    );

    expect($dto->id)->toBe('uuid')
        ->and($dto->type)->toBe('product')
        ->and($dto->attributes)->toBeNull()
        ->and($dto->relationships)->toBeNull();
});

test('OauthClientCredentialsGrant DTO', function (): void {
    $dto = new OauthClientCredentialsGrant(
        grantType: 'client_credentials',
        clientId: 'my-id',
        clientSecret: 'my-secret',
    );

    expect($dto->grantType)->toBe('client_credentials')
        ->and($dto->clientId)->toBe('my-id');
});

test('Criteria DTO', function (): void {
    $criteria = new Criteria(
        page: 1,
        limit: 25,
    );

    expect($criteria->page)->toBe(1)
        ->and($criteria->limit)->toBe(25)
        ->and($criteria->filter)->toBeNull();
});
