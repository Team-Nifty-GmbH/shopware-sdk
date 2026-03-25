<?php

use TeamNiftyGmbH\Shopware\Resource\BulkOperations;
use TeamNiftyGmbH\Shopware\Resource\Category;
use TeamNiftyGmbH\Shopware\Resource\Customer;
use TeamNiftyGmbH\Shopware\Resource\Media;
use TeamNiftyGmbH\Shopware\Resource\Order;
use TeamNiftyGmbH\Shopware\Resource\OrderManagement;
use TeamNiftyGmbH\Shopware\Resource\Product;
use TeamNiftyGmbH\Shopware\Resource\SalesChannel;
use TeamNiftyGmbH\Shopware\Shopware;

test('connector can be instantiated', function (): void {
    $shopware = new Shopware(
        baseUrl: 'https://shop.example.com/api',
        clientId: 'test-client-id',
        clientSecret: 'test-client-secret',
    );

    expect($shopware)->toBeInstanceOf(Shopware::class);
});

test('base url is resolved correctly', function (): void {
    $shopware = new Shopware(
        baseUrl: 'https://shop.example.com/api',
        clientId: 'test-client-id',
        clientSecret: 'test-client-secret',
    );

    expect($shopware->resolveBaseUrl())->toBe('https://shop.example.com/api');
});

test('base url trailing slash is trimmed', function (): void {
    $shopware = new Shopware(
        baseUrl: 'https://shop.example.com/api/',
        clientId: 'test-client-id',
        clientSecret: 'test-client-secret',
    );

    expect($shopware->resolveBaseUrl())->toBe('https://shop.example.com/api');
});

test('token url defaults to base url + oauth/token', function (): void {
    $shopware = new Shopware(
        baseUrl: 'https://shop.example.com/api',
        clientId: 'test-client-id',
        clientSecret: 'test-client-secret',
    );

    $config = $shopware->defaultOauthConfig();
    expect($config->getTokenEndpoint())->toBe('https://shop.example.com/api/oauth/token');
});

test('custom token url is used when provided', function (): void {
    $shopware = new Shopware(
        baseUrl: 'https://shop.example.com/api',
        clientId: 'test-client-id',
        clientSecret: 'test-client-secret',
        tokenUrl: 'https://auth.example.com/token',
    );

    $config = $shopware->defaultOauthConfig();
    expect($config->getTokenEndpoint())->toBe('https://auth.example.com/token');
});

test('all resource methods return correct types', function (): void {
    $shopware = new Shopware(
        baseUrl: 'https://shop.example.com/api',
        clientId: 'test',
        clientSecret: 'test',
    );

    expect($shopware->product())->toBeInstanceOf(Product::class)
        ->and($shopware->order())->toBeInstanceOf(Order::class)
        ->and($shopware->customer())->toBeInstanceOf(Customer::class)
        ->and($shopware->category())->toBeInstanceOf(Category::class)
        ->and($shopware->media())->toBeInstanceOf(Media::class)
        ->and($shopware->salesChannel())->toBeInstanceOf(SalesChannel::class)
        ->and($shopware->orderManagement())->toBeInstanceOf(OrderManagement::class)
        ->and($shopware->bulkOperations())->toBeInstanceOf(BulkOperations::class);
});
