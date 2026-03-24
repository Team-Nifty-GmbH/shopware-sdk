<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductCrossSelling;

/**
 * createProductCrossSelling
 *
 * Available since: 6.1.0.0
 */
class CreateProductCrossSelling extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/product-cross-selling";
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected array $data,
		protected ?string $response = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductCrossSelling::from($response->json('data'));
    }
}
