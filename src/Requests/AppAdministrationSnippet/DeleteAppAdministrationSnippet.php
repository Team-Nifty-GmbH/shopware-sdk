<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppAdministrationSnippet
 *
 * Available since: 6.4.15.0
 */
class DeleteAppAdministrationSnippet extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/app-administration-snippet/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_administration_snippet
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
