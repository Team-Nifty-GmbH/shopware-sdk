<?php

use TeamNiftyGmbH\Shopware\Support\CriteriaBuilder;

test('make creates a new instance', function (): void {
    $criteria = CriteriaBuilder::make();

    expect($criteria)->toBeInstanceOf(CriteriaBuilder::class);
});

test('default values', function (): void {
    $result = CriteriaBuilder::make()->toArray();

    expect($result)->toHaveKey('page', 1)
        ->toHaveKey('limit', 25);
});

test('page and limit', function (): void {
    $result = CriteriaBuilder::make()
        ->page(3)
        ->limit(50)
        ->toArray();

    expect($result['page'])->toBe(3)
        ->and($result['limit'])->toBe(50);
});

test('ids filter', function (): void {
    $result = CriteriaBuilder::make()
        ->ids(['uuid-1', 'uuid-2'])
        ->toArray();

    expect($result['ids'])->toBe(['uuid-1', 'uuid-2']);
});

test('term search', function (): void {
    $result = CriteriaBuilder::make()
        ->term('shirt')
        ->toArray();

    expect($result['term'])->toBe('shirt');
});

test('equals filter', function (): void {
    $result = CriteriaBuilder::make()
        ->equals('active', true)
        ->toArray();

    expect($result['filter'])->toBe([
        ['type' => 'equals', 'field' => 'active', 'value' => true],
    ]);
});

test('equalsAny filter', function (): void {
    $result = CriteriaBuilder::make()
        ->equalsAny('id', ['uuid-1', 'uuid-2'])
        ->toArray();

    expect($result['filter'][0])
        ->type->toBe('equalsAny')
        ->field->toBe('id')
        ->value->toBe(['uuid-1', 'uuid-2']);
});

test('contains filter', function (): void {
    $result = CriteriaBuilder::make()
        ->contains('name', 'shirt')
        ->toArray();

    expect($result['filter'][0])
        ->type->toBe('contains')
        ->field->toBe('name')
        ->value->toBe('shirt');
});

test('prefix filter', function (): void {
    $result = CriteriaBuilder::make()
        ->prefix('productNumber', 'SW-')
        ->toArray();

    expect($result['filter'][0])
        ->type->toBe('prefix')
        ->field->toBe('productNumber')
        ->value->toBe('SW-');
});

test('suffix filter', function (): void {
    $result = CriteriaBuilder::make()
        ->suffix('productNumber', '-XL')
        ->toArray();

    expect($result['filter'][0])
        ->type->toBe('suffix')
        ->field->toBe('productNumber')
        ->value->toBe('-XL');
});

test('range filter', function (): void {
    $result = CriteriaBuilder::make()
        ->range('stock', ['gte' => 10, 'lte' => 100])
        ->toArray();

    expect($result['filter'][0])
        ->type->toBe('range')
        ->field->toBe('stock')
        ->parameters->toBe(['gte' => 10, 'lte' => 100]);
});

test('multi filter', function (): void {
    $result = CriteriaBuilder::make()
        ->multi('or', [
            ['type' => 'contains', 'field' => 'name', 'value' => 'shirt'],
            ['type' => 'contains', 'field' => 'description', 'value' => 'shirt'],
        ])
        ->toArray();

    expect($result['filter'][0])
        ->type->toBe('multi')
        ->operator->toBe('or')
        ->queries->toHaveCount(2);
});

test('not filter', function (): void {
    $result = CriteriaBuilder::make()
        ->not('and', [
            ['type' => 'equals', 'field' => 'active', 'value' => false],
        ])
        ->toArray();

    expect($result['filter'][0])
        ->type->toBe('not')
        ->operator->toBe('and')
        ->queries->toHaveCount(1);
});

test('multiple filters are accumulated', function (): void {
    $result = CriteriaBuilder::make()
        ->equals('active', true)
        ->contains('name', 'shirt')
        ->range('stock', ['gte' => 1])
        ->toArray();

    expect($result['filter'])->toHaveCount(3);
});

test('sort ascending', function (): void {
    $result = CriteriaBuilder::make()
        ->sort('name')
        ->toArray();

    expect($result['sort'][0])
        ->field->toBe('name')
        ->order->toBe('ASC')
        ->naturalSorting->toBeFalse();
});

test('sort descending', function (): void {
    $result = CriteriaBuilder::make()
        ->sortDesc('createdAt')
        ->toArray();

    expect($result['sort'][0])
        ->field->toBe('createdAt')
        ->order->toBe('DESC');
});

test('sort with natural sorting', function (): void {
    $result = CriteriaBuilder::make()
        ->sort('productNumber', 'ASC', true)
        ->toArray();

    expect($result['sort'][0])->naturalSorting->toBeTrue();
});

test('association without criteria', function (): void {
    $result = CriteriaBuilder::make()
        ->association('manufacturer')
        ->toArray();

    expect($result['associations'])->toHaveKey('manufacturer')
        ->and($result['associations']['manufacturer'])->toBe([]);
});

test('association with nested criteria', function (): void {
    $result = CriteriaBuilder::make()
        ->association('manufacturer', CriteriaBuilder::make()
            ->association('media')
            ->limit(5)
        )
        ->toArray();

    expect($result['associations']['manufacturer'])
        ->toHaveKey('associations')
        ->toHaveKey('limit', 5);
});

test('stats aggregation', function (): void {
    $result = CriteriaBuilder::make()
        ->statsAggregation('price-stats', 'price')
        ->toArray();

    expect($result['aggregations'][0])
        ->name->toBe('price-stats')
        ->type->toBe('stats')
        ->field->toBe('price');
});

test('terms aggregation with limit', function (): void {
    $result = CriteriaBuilder::make()
        ->termsAggregation('manufacturers', 'manufacturerId', limit: 10)
        ->toArray();

    expect($result['aggregations'][0])
        ->name->toBe('manufacturers')
        ->type->toBe('terms')
        ->field->toBe('manufacturerId')
        ->limit->toBe(10);
});

test('count aggregation', function (): void {
    $result = CriteriaBuilder::make()
        ->countAggregation('total', 'id')
        ->toArray();

    expect($result['aggregations'][0])->type->toBe('count');
});

test('sum aggregation', function (): void {
    $result = CriteriaBuilder::make()
        ->sumAggregation('total-stock', 'stock')
        ->toArray();

    expect($result['aggregations'][0])->type->toBe('sum');
});

test('avg aggregation', function (): void {
    $result = CriteriaBuilder::make()
        ->avgAggregation('avg-price', 'price')
        ->toArray();

    expect($result['aggregations'][0])->type->toBe('avg');
});

test('max aggregation', function (): void {
    $result = CriteriaBuilder::make()
        ->maxAggregation('max-price', 'price')
        ->toArray();

    expect($result['aggregations'][0])->type->toBe('max');
});

test('min aggregation', function (): void {
    $result = CriteriaBuilder::make()
        ->minAggregation('min-price', 'price')
        ->toArray();

    expect($result['aggregations'][0])->type->toBe('min');
});

test('groupBy', function (): void {
    $result = CriteriaBuilder::make()
        ->groupBy('manufacturerId')
        ->toArray();

    expect($result['grouping'])->toBe(['manufacturerId']);
});

test('fields selection', function (): void {
    $result = CriteriaBuilder::make()
        ->fields(['name', 'productNumber', 'stock'])
        ->toArray();

    expect($result['fields'])->toBe(['name', 'productNumber', 'stock']);
});

test('includes', function (): void {
    $result = CriteriaBuilder::make()
        ->includes(['product' => ['id', 'name']])
        ->toArray();

    expect($result['includes'])->toBe(['product' => ['id', 'name']]);
});

test('total count mode', function (): void {
    $result = CriteriaBuilder::make()
        ->totalCountMode('exact')
        ->toArray();

    expect($result['total-count-mode'])->toBe('exact');
});

test('post filter', function (): void {
    $result = CriteriaBuilder::make()
        ->postFilter('equals', 'active', true)
        ->toArray();

    expect($result['post-filter'][0])
        ->type->toBe('equals')
        ->field->toBe('active')
        ->value->toBeTrue();
});

test('null values are excluded from array', function (): void {
    $result = CriteriaBuilder::make()->toArray();

    expect($result)->not->toHaveKey('filter')
        ->not->toHaveKey('sort')
        ->not->toHaveKey('associations')
        ->not->toHaveKey('aggregations')
        ->not->toHaveKey('ids')
        ->not->toHaveKey('term')
        ->not->toHaveKey('includes');
});

test('complex real-world criteria', function (): void {
    $result = CriteriaBuilder::make()
        ->page(1)
        ->limit(25)
        ->equals('active', true)
        ->contains('name', 'shirt')
        ->range('stock', ['gte' => 1])
        ->sort('name')
        ->sortDesc('createdAt')
        ->association('manufacturer')
        ->association('categories', CriteriaBuilder::make()->limit(5))
        ->statsAggregation('price-stats', 'price')
        ->totalCountMode('exact')
        ->toArray();

    expect($result)
        ->page->toBe(1)
        ->limit->toBe(25)
        ->filter->toHaveCount(3)
        ->sort->toHaveCount(2)
        ->associations->toHaveCount(2)
        ->aggregations->toHaveCount(1);

    expect($result['total-count-mode'])->toBe('exact');
});
