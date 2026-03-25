<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * aggregateOrderTransactionCaptureRefund
 *
 * Available since: 6.6.10.0
 */
class AggregateOrderTransactionCaptureRefund extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/aggregate/order-transaction-capture-refund';
    }

    public function __construct(
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
