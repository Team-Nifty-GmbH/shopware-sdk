<?php

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

    expect($shopware->product())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\Product::class)
        ->and($shopware->order())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\Order::class)
        ->and($shopware->customer())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\Customer::class)
        ->and($shopware->category())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\Category::class)
        ->and($shopware->media())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\Media::class)
        ->and($shopware->salesChannel())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\SalesChannel::class)
        ->and($shopware->orderManagement())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\OrderManagement::class)
        ->and($shopware->bulkOperations())->toBeInstanceOf(TeamNiftyGmbH\Shopware\Resource\BulkOperations::class);
});
