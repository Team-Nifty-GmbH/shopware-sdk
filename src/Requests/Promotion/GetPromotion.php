<?php

namespace TeamNiftyGmbH\Shopware\Requests\Promotion;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Promotion;

/**
 * getPromotion
 *
 * Available since: 6.0.0.0
 */
class GetPromotion extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotion/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the promotion
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Promotion::from($response->json('data'));
    }
}
