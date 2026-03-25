<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\OrderTransactionCaptureRefundPosition;

/**
 * updateOrderTransactionCaptureRefundPosition
 *
 * Available since: 6.4.12.0
 */
class UpdateOrderTransactionCaptureRefundPosition extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/order-transaction-capture-refund-position/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_transaction_capture_refund_position
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected array $data,
        protected ?string $response = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderTransactionCaptureRefundPosition::from($response->json('data'));
    }
}
