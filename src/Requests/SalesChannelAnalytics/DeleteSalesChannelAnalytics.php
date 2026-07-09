<?php

namespace TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteSalesChannelAnalytics
 *
 * Available since: 6.2.0.0
 */
class DeleteSalesChannelAnalytics extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/sales-channel-analytics/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_analytics
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
