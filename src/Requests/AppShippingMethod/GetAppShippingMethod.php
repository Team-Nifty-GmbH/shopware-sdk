<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppShippingMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppShippingMethod;

/**
 * getAppShippingMethod
 *
 * Available since: 6.5.7.0
 */
class GetAppShippingMethod extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/app-shipping-method/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_shipping_method
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return AppShippingMethod::from($response->json('data'));
    }
}
