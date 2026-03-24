<?php

namespace TeamNiftyGmbH\Shopware\Requests\Unit;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Unit;

/**
 * getUnit
 *
 * Available since: 6.0.0.0
 */
class GetUnit extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/unit/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the unit
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Unit::from($response->json('data'));
    }
}
