<?php

namespace TeamNiftyGmbH\Shopware\Requests\SnippetSet;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SnippetSet;

/**
 * updateSnippetSet
 *
 * Available since: 6.0.0.0
 */
class UpdateSnippetSet extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
		protected array $data,
		protected ?string $response = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SnippetSet::from($response->json('data'));
    }
}
