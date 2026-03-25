<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerRecovery;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\CustomerRecovery;

/**
 * createCustomerRecovery
 *
 * Available since: 6.1.0.0
 */
class CreateCustomerRecovery extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/customer-recovery';
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
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
        return CustomerRecovery::from($response->json('data'));
    }
}
