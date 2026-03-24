<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductExport;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductExport;

/**
 * getProductExport
 *
 * Available since: 6.1.0.0
 */
class GetProductExport extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-export/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_export
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductExport::from($response->json('data'));
    }
}
