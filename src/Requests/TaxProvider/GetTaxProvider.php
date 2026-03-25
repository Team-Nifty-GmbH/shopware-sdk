<?php

namespace TeamNiftyGmbH\Shopware\Requests\TaxProvider;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\TaxProvider;

/**
 * getTaxProvider
 *
 * Available since: 6.5.0.0
 */
class GetTaxProvider extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/tax-provider/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the tax_provider
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return TaxProvider::from($response->json('data'));
    }
}
