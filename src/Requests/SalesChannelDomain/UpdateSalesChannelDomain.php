<?php

namespace TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\SalesChannelDomain;

/**
 * updateSalesChannelDomain
 *
 * Available since: 6.0.0.0
 */
class UpdateSalesChannelDomain extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/sales-channel-domain/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_domain
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
        return SalesChannelDomain::from($response->json('data'));
    }
}
