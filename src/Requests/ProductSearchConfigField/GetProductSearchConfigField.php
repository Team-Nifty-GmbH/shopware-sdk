<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductSearchConfigField;

/**
 * getProductSearchConfigField
 *
 * Available since: 6.3.5.0
 */
class GetProductSearchConfigField extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-search-config-field/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_search_config_field
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductSearchConfigField::from($response->json('data'));
    }
}
