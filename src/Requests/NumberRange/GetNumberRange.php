<?php

namespace TeamNiftyGmbH\Shopware\Requests\NumberRange;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\NumberRange;

/**
 * getNumberRange
 *
 * Available since: 6.0.0.0
 */
class GetNumberRange extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/number-range/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the number_range
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return NumberRange::from($response->json('data'));
    }
}
