<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PromotionDiscountPrices;

/**
 * getPromotionDiscountPrices
 *
 * Available since: 6.0.0.0
 */
class GetPromotionDiscountPrices extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/promotion-discount-prices/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the promotion_discount_prices
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return PromotionDiscountPrices::from($response->json('data'));
    }
}
