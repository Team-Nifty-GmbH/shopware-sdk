<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerAddress;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomerAddress;

/**
 * getCustomerAddress
 *
 * Available since: 6.0.0.0
 */
class GetCustomerAddress extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customer-address/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the customer_address
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomerAddress::from($response->json('data'));
    }
}
