<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppTemplate;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppTemplate
 *
 * Available since: 6.3.1.0
 */
class DeleteAppTemplate extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/app-template/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_template
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
