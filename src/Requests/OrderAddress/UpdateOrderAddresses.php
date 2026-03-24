<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderAddress;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderAddress;

/**
 * updateOrderAddresses
 *
 * Endpoint which takes a list of mapping objects as payload and updates the order addresses
 * accordingly
 */
class UpdateOrderAddresses extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/order/{$this->orderId}/order-address";
	}


	/**
	 * @param string $orderId Identifier of the order.
	 */
	public function __construct(
		protected string $orderId,
		protected array $data,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderAddress::from($response->json('data'));
    }
}
