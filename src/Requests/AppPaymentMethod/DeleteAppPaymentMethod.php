<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppPaymentMethod
 *
 * Available since: 6.4.1.0
 */
class DeleteAppPaymentMethod extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/app-payment-method/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_payment_method
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected ?string $response = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
