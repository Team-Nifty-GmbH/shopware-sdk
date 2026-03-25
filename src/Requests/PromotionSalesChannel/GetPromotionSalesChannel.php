<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PromotionSalesChannel;

/**
 * getPromotionSalesChannel
 *
 * Available since: 6.0.0.0
 */
class GetPromotionSalesChannel extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/promotion-sales-channel/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the promotion_sales_channel
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return PromotionSalesChannel::from($response->json('data'));
    }
}
