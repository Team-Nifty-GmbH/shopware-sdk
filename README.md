# Shopware 6 Admin API SDK

PHP SDK for the Shopware 6 Admin API, built with [Saloon](https://docs.saloon.dev).

## Installation

```bash
composer require team-nifty-gmbh/shopware-sdk
```

## Usage

### Connect

```php
use TeamNiftyGmbH\Shopware\Shopware;

$shopware = new Shopware(
    baseUrl: 'https://your-shop.example.com/api',
    clientId: 'your-client-id',
    clientSecret: 'your-client-secret',
);
```

### CRUD Operations

```php
// List
$response = $shopware->product()->getProductList(limit: 10, page: 1);
$products = $response->json('data');

// Get single
$response = $shopware->product()->getProduct('product-uuid');
$product = $response->dto(); // Returns TeamNiftyGmbH\Shopware\Dto\Product

// Create
$response = $shopware->product()->createProduct([
    'name' => 'My Product',
    'productNumber' => 'SW-001',
    'stock' => 100,
    'taxId' => 'tax-uuid',
    'price' => [[
        'currencyId' => 'currency-uuid',
        'gross' => 19.99,
        'net' => 16.80,
        'linked' => true,
    ]],
]);

// Update
$shopware->product()->updateProduct('product-uuid', [
    'name' => 'Updated Name',
    'stock' => 50,
]);

// Delete
$shopware->product()->deleteProduct('product-uuid');
```

### Search with CriteriaBuilder

```php
use TeamNiftyGmbH\Shopware\Support\CriteriaBuilder;

$criteria = CriteriaBuilder::make()
    ->equals('active', true)
    ->contains('name', 'shirt')
    ->range('stock', ['gte' => 10])
    ->sort('name')
    ->sortDesc('createdAt')
    ->limit(25)
    ->page(1)
    ->association('manufacturer')
    ->association('categories')
    ->toArray();

$response = $shopware->product()->searchProduct($criteria);
$products = $response->dto(); // Returns array of Product DTOs
```

#### Nested Associations

```php
$criteria = CriteriaBuilder::make()
    ->association('manufacturer', CriteriaBuilder::make()
        ->association('media')
    )
    ->toArray();
```

#### Aggregations

```php
$criteria = CriteriaBuilder::make()
    ->equals('active', true)
    ->statsAggregation('price-stats', 'price')
    ->termsAggregation('manufacturers', 'manufacturerId', limit: 10)
    ->toArray();

$response = $shopware->product()->aggregateProduct($criteria);
```

#### Complex Filters

```php
$criteria = CriteriaBuilder::make()
    ->multi('or', [
        ['type' => 'contains', 'field' => 'name', 'value' => 'shirt'],
        ['type' => 'contains', 'field' => 'description', 'value' => 'shirt'],
    ])
    ->not('and', [
        ['type' => 'equals', 'field' => 'active', 'value' => false],
    ])
    ->toArray();
```

### Pagination

Iterate over all pages automatically:

```php
use TeamNiftyGmbH\Shopware\Requests\Product\GetProductList;

$paginator = $shopware->paginate(new GetProductList(limit: 50));

foreach ($paginator as $response) {
    $products = $response->json('data');
    
    foreach ($products as $product) {
        // Process each product
    }
}

// Or collect all items
foreach ($paginator->items() as $item) {
    // Each item is a raw array from the API
}
```

### Typed Responses (DTOs)

All requests support `$response->dto()` for typed responses using [Spatie Laravel Data](https://spatie-laravel-data.com):

```php
// Single entity
$product = $shopware->product()->getProduct('uuid')->dto();
// $product is TeamNiftyGmbH\Shopware\Dto\Product

// List/Search
$products = $shopware->product()->searchProduct($criteria)->dto();
// $products is array<TeamNiftyGmbH\Shopware\Dto\Product>
```

### Bulk Operations

```php
$shopware->bulkOperations()->sync([
    [
        'action' => 'upsert',
        'entity' => 'product',
        'payload' => [
            ['id' => 'uuid-1', 'stock' => 100],
            ['id' => 'uuid-2', 'stock' => 200],
        ],
    ],
]);
```

### Order Management

```php
// Transition order state
$shopware->orderManagement()->orderStateTransition('order-uuid', 'process');

// Transition delivery state
$shopware->orderManagement()->orderDeliveryStateTransition('delivery-uuid', 'ship');

// Transition payment state
$shopware->orderManagement()->orderTransactionStateTransition('transaction-uuid', 'paid');
```

## Available Resources

The SDK covers the full Shopware 6 Admin API with 151 resources. Common ones:

| Resource | Access |
|----------|--------|
| Product | `$shopware->product()` |
| Order | `$shopware->order()` |
| Customer | `$shopware->customer()` |
| Category | `$shopware->category()` |
| Media | `$shopware->media()` |
| Sales Channel | `$shopware->salesChannel()` |
| Property Group | `$shopware->propertyGroup()` |
| Promotion | `$shopware->promotion()` |
| Shipping Method | `$shopware->shippingMethod()` |
| Payment Method | `$shopware->paymentMethod()` |
| Order Management | `$shopware->orderManagement()` |
| Bulk Operations | `$shopware->bulkOperations()` |
| System Operations | `$shopware->systemOperations()` |

## Laravel Integration

For Laravel projects, use the [laravel-shopware](https://github.com/team-nifty-gmbh/laravel-shopware) package which provides a ServiceProvider, Facade, config, and `shopware6()` helper.
