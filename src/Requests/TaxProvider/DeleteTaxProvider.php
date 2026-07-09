<?php

namespace TeamNiftyGmbH\Shopware\Requests\TaxProvider;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteTaxProvider
 *
 * Available since: 6.5.0.0
 */
class DeleteTaxProvider extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/tax-provider/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the tax_provider
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
