<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderLineItemDownload;

/**
 * getOrderLineItemDownload
 *
 * Available since: 6.4.19.0
 */
class GetOrderLineItemDownload extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/order-line-item-download/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_line_item_download
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderLineItemDownload::from($response->json('data'));
    }
}
