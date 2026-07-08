<?php

use TeamNiftyGmbH\Shopware\Resource\GenericEntity;
use TeamNiftyGmbH\Shopware\Shopware;

test('entity() returns a GenericEntity for the given name', function (): void {
    $shopware = new Shopware(
        baseUrl: 'https://shop.example.com/api',
        clientId: 'test-client-id',
        clientSecret: 'test-client-secret',
    );

    $resource = $shopware->entity('custom_entity_blog');

    expect($resource)->toBeInstanceOf(GenericEntity::class)
        ->and($resource->entityName())->toBe('custom_entity_blog');
});
