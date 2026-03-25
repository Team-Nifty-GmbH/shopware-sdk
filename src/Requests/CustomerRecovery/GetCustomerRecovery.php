<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerRecovery;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomerRecovery;

/**
 * getCustomerRecovery
 *
 * Available since: 6.1.0.0
 */
class GetCustomerRecovery extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customer-recovery/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the customer_recovery
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomerRecovery::from($response->json('data'));
    }
}
