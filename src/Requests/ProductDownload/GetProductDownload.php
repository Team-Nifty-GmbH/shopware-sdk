<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductDownload;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductDownload;

/**
 * getProductDownload
 *
 * Available since: 6.4.19.0
 */
class GetProductDownload extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-download/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_download
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductDownload::from($response->json('data'));
    }
}
