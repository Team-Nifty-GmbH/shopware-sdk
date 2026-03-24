<?php

namespace TeamNiftyGmbH\Shopware\Requests\PropertyGroup;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PropertyGroup;

/**
 * getPropertyGroup
 *
 * Available since: 6.0.0.0
 */
class GetPropertyGroup extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/property-group/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the property_group
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return PropertyGroup::from($response->json('data'));
    }
}
