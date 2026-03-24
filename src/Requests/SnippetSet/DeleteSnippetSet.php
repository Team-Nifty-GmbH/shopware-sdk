<?php

namespace TeamNiftyGmbH\Shopware\Requests\SnippetSet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteSnippetSet
 *
 * Available since: 6.0.0.0
 */
class DeleteSnippetSet extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/snippet-set/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the snippet_set
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
