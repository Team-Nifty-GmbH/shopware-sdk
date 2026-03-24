<?php

namespace TeamNiftyGmbH\Shopware\Requests\PaymentMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PaymentMethod;

/**
 * getPaymentMethod
 *
 * Available since: 6.0.0.0
 */
class GetPaymentMethod extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/payment-method/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the payment_method
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return PaymentMethod::from($response->json('data'));
    }
}
