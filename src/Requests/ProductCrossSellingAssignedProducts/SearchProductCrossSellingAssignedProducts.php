<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductCrossSellingAssignedProducts;

/**
 * searchProductCrossSellingAssignedProducts
 *
 * Available since: 6.2.0.0
 */
class SearchProductCrossSellingAssignedProducts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/search/product-cross-selling-assigned-products";
	}


	/**
	 * @param array $data
	 * @param null|string $swIncludeSearchInfo Controls whether API search information is included in the response. Default is 1 (enabled), will be 0 (disabled) in the next major version.
	 */
	public function __construct(
		protected array $data = [],
		protected ?string $swIncludeSearchInfo = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultHeaders(): array
	{
		return array_filter(['sw-include-search-info' => $this->swIncludeSearchInfo]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return array_map(
            fn (array $item) => ProductCrossSellingAssignedProducts::from($item),
            $response->json('data') ?? []
        );
    }
}
