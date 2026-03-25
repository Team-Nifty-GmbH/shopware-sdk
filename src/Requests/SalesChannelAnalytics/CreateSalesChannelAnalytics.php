<?php

namespace TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\SalesChannelAnalytics;

/**
 * createSalesChannelAnalytics
 *
 * Available since: 6.2.0.0
 */
class CreateSalesChannelAnalytics extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/sales-channel-analytics';
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
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
        return SalesChannelAnalytics::from($response->json('data'));
    }
}
