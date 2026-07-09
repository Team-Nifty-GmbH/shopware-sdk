<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deletePromotionSalesChannel
 *
 * Available since: 6.0.0.0
 */
class DeletePromotionSalesChannel extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/promotion-sales-channel/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the promotion_sales_channel
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
