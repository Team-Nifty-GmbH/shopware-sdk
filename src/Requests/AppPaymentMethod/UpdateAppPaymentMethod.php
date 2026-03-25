<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\AppPaymentMethod;

/**
 * updateAppPaymentMethod
 *
 * Available since: 6.4.1.0
 */
class UpdateAppPaymentMethod extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/app-payment-method/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_payment_method
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
        return AppPaymentMethod::from($response->json('data'));
    }
}
