<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomField;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomField;

/**
 * getCustomField
 *
 * Available since: 6.0.0.0
 */
class GetCustomField extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/custom-field/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the custom_field
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomField::from($response->json('data'));
    }
}
