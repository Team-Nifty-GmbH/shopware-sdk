<?php

test('can list categories', function (): void {
    $response = $this->shopware()->category()->getCategoryList(limit: 5);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()
        ->and($response->json('total'))->toBeGreaterThan(0);
})->group('integration');

test('can search categories', function (): void {
    $response = $this->shopware()->category()->searchCategory([
        'limit' => 5,
    ]);

    expect($response->status())->toBe(200);
})->group('integration');
