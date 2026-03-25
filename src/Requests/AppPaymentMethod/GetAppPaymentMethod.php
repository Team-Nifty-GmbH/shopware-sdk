<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppPaymentMethod;

/**
 * getAppPaymentMethod
 *
 * Available since: 6.4.1.0
 */
class GetAppPaymentMethod extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/app-payment-method/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_payment_method
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return AppPaymentMethod::from($response->json('data'));
    }
}
