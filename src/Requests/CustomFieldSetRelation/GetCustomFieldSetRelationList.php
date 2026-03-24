<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomFieldSetRelation;

/**
 * getCustomFieldSetRelationList
 *
 * Available since: 6.0.0.0
 */
class GetCustomFieldSetRelationList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/custom-field-set-relation";
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $swQuery Encoded SwagQL in JSON
	 */
	public function __construct(
		protected ?int $limit = null,
		protected ?int $page = null,
		protected ?string $swQuery = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit, 'page' => $this->page, 'query' => $this->swQuery]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return array_map(
            fn (array $item) => CustomFieldSetRelation::from($item),
            $response->json('data') ?? []
        );
    }
}
