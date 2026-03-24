<?php

use TeamNiftyGmbH\Shopware\Requests\Category\GetCategoryList;

test('can paginate through categories', function (): void {
    $paginator = $this->shopware()->paginate(new GetCategoryList(limit: 2));

    $allItems = [];
    $pageCount = 0;

    foreach ($paginator as $response) {
        $items = $response->json('data');
        $allItems = array_merge($allItems, $items);
        $pageCount++;

        // Safety limit
        if ($pageCount >= 5) {
            break;
        }
    }

    expect($pageCount)->toBeGreaterThanOrEqual(1)
        ->and($allItems)->not->toBeEmpty();
})->group('integration');
