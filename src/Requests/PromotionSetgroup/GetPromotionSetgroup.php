<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PromotionSetgroup;

/**
 * getPromotionSetgroup
 *
 * Available since: 6.0.0.0
 */
class GetPromotionSetgroup extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotion-setgroup/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the promotion_setgroup
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return PromotionSetgroup::from($response->json('data'));
    }
}
