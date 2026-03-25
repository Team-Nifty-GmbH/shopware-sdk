<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * orderTransactionCaptureRefund
 *
 * Refunds an order transaction capture.
 */
class OrderTransactionCaptureRefund extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/_action/order_transaction_capture_refund/{$this->refundId}";
    }

    /**
     * @param  string  $refundId  Identifier of the order transaction capture refund.
     */
    public function __construct(
        protected string $refundId,
        protected array $data = [],
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
