<?php

namespace TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PropertyGroupOption;

/**
 * getPropertyGroupOption
 *
 * Available since: 6.0.0.0
 */
class GetPropertyGroupOption extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/property-group-option/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the property_group_option
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return PropertyGroupOption::from($response->json('data'));
    }
}
