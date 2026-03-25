<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransaction;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderTransaction;

/**
 * getOrderTransaction
 *
 * Available since: 6.0.0.0
 */
class GetOrderTransaction extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/order-transaction/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_transaction
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderTransaction::from($response->json('data'));
    }
}
