<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomFieldSetRelation;

/**
 * getCustomFieldSetRelation
 *
 * Available since: 6.0.0.0
 */
class GetCustomFieldSetRelation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/custom-field-set-relation/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the custom_field_set_relation
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomFieldSetRelation::from($response->json('data'));
    }
}
