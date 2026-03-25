<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderDelivery;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderDelivery;

/**
 * getOrderDelivery
 *
 * Available since: 6.0.0.0
 */
class GetOrderDelivery extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/order-delivery/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_delivery
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderDelivery::from($response->json('data'));
    }
}
