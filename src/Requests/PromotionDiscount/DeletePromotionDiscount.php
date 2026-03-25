<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionDiscount;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deletePromotionDiscount
 *
 * Available since: 6.0.0.0
 */
class DeletePromotionDiscount extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/promotion-discount/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the promotion_discount
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $response = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
