<?php

test('can list taxes', function (): void {
    $response = $this->shopware()->tax()->getTaxList(limit: 10);

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeArray()
        ->and($response->json('total'))->toBeGreaterThan(0);
})->group('integration');

test('can get single tax with dto', function (): void {
    $listResponse = $this->shopware()->tax()->getTaxList(limit: 1);
    $taxId = $listResponse->json('data.0.id');

    $response = $this->shopware()->tax()->getTax($taxId);

    expect($response->status())->toBe(200);

    $dto = $response->dto();
    expect($dto)->toBeInstanceOf(TeamNiftyGmbH\Shopware\Dto\Tax::class)
        ->and($dto->id)->toBe($taxId)
        ->and($dto->taxRate)->toBeFloat();
})->group('integration');
