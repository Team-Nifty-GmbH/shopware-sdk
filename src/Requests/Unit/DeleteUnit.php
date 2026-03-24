<?php

namespace TeamNiftyGmbH\Shopware\Requests\Unit;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteUnit
 *
 * Available since: 6.0.0.0
 */
class DeleteUnit extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/unit/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the unit
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
