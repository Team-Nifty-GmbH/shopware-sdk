<?php

namespace TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ShippingMethodPrice;

/**
 * updateShippingMethodPrice
 *
 * Available since: 6.0.0.0
 */
class UpdateShippingMethodPrice extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/shipping-method-price/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the shipping_method_price
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
        return ShippingMethodPrice::from($response->json('data'));
    }
}
