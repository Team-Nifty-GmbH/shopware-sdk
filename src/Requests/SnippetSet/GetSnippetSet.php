<?php

namespace TeamNiftyGmbH\Shopware\Requests\SnippetSet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SnippetSet;

/**
 * getSnippetSet
 *
 * Available since: 6.0.0.0
 */
class GetSnippetSet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/snippet-set/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the snippet_set
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SnippetSet::from($response->json('data'));
    }
}
