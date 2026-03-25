<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderTransactionCaptureRefundPosition;

/**
 * getOrderTransactionCaptureRefundPosition
 *
 * Available since: 6.4.12.0
 */
class GetOrderTransactionCaptureRefundPosition extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/order-transaction-capture-refund-position/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_transaction_capture_refund_position
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderTransactionCaptureRefundPosition::from($response->json('data'));
    }
}
