<?php

namespace TeamNiftyGmbH\Shopware\Requests\SalesChannelType;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SalesChannelType;

/**
 * getSalesChannelType
 *
 * Available since: 6.0.0.0
 */
class GetSalesChannelType extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/sales-channel-type/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_type
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return SalesChannelType::from($response->json('data'));
    }
}
