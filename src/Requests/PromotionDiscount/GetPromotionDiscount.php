<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionDiscount;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PromotionDiscount;

/**
 * getPromotionDiscount
 *
 * Available since: 6.0.0.0
 */
class GetPromotionDiscount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotion-discount/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the promotion_discount
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return PromotionDiscount::from($response->json('data'));
    }
}
