<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderTransactionCaptureRefund;

/**
 * getOrderTransactionCaptureRefund
 *
 * Available since: 6.4.12.0
 */
class GetOrderTransactionCaptureRefund extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/order-transaction-capture-refund/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_transaction_capture_refund
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderTransactionCaptureRefund::from($response->json('data'));
    }
}
