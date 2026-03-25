<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppShippingMethod;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\AppShippingMethod;

/**
 * updateAppShippingMethod
 *
 * Available since: 6.5.7.0
 */
class UpdateAppShippingMethod extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/app-shipping-method/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_shipping_method
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
        return AppShippingMethod::from($response->json('data'));
    }
}
