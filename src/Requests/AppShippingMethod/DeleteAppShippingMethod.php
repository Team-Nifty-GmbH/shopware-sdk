<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppShippingMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppShippingMethod
 *
 * Available since: 6.5.7.0
 */
class DeleteAppShippingMethod extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/app-shipping-method/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_shipping_method
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
