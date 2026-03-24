<?php

namespace TeamNiftyGmbH\Shopware\Requests\Rule;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Rule;

/**
 * getRule
 *
 * Available since: 6.0.0.0
 */
class GetRule extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rule/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the rule
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Rule::from($response->json('data'));
    }
}
