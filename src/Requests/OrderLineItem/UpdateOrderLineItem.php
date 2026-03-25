<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderLineItem;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\OrderLineItem;

/**
 * updateOrderLineItem
 *
 * Available since: 6.0.0.0
 */
class UpdateOrderLineItem extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/order-line-item/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the order_line_item
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
        return OrderLineItem::from($response->json('data'));
    }
}
