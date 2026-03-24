<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductConfiguratorSetting;

/**
 * getProductConfiguratorSetting
 *
 * Available since: 6.0.0.0
 */
class GetProductConfiguratorSetting extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-configurator-setting/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_configurator_setting
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductConfiguratorSetting::from($response->json('data'));
    }
}
