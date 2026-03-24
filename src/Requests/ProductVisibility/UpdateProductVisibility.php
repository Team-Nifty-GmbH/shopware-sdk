<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductVisibility;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductVisibility;

/**
 * updateProductVisibility
 *
 * Available since: 6.0.0.0
 */
class UpdateProductVisibility extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/product-visibility/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_visibility
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
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
        return ProductVisibility::from($response->json('data'));
    }
}
