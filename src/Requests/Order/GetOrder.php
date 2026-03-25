<?php

namespace TeamNiftyGmbH\Shopware\Requests\Order;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Order;

/**
 * getOrder
 *
 * Available since: 6.0.0.0
 */
class GetOrder extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/order/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Order::from($response->json('data'));
    }
}
