<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransaction;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteOrderTransaction
 *
 * Available since: 6.0.0.0
 */
class DeleteOrderTransaction extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/order-transaction/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_transaction
     * @param  null|string  $responseFormat  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $responseFormat = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->responseFormat]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
