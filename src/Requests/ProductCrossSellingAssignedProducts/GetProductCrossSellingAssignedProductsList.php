<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductCrossSellingAssignedProducts;

/**
 * getProductCrossSellingAssignedProductsList
 *
 * Available since: 6.2.0.0
 */
class GetProductCrossSellingAssignedProductsList extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/product-cross-selling-assigned-products';
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $swQuery  Encoded SwagQL in JSON
     */
    public function __construct(
        protected ?int $limit = null,
        protected ?int $page = null,
        protected ?string $swQuery = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'page' => $this->page, 'query' => $this->swQuery]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return array_map(
            fn (array $item) => ProductCrossSellingAssignedProducts::from($item),
            $response->json('data') ?? []
        );
    }
}
