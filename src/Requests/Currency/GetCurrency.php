<?php

namespace TeamNiftyGmbH\Shopware\Requests\Currency;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Currency;

/**
 * getCurrency
 *
 * Available since: 6.0.0.0
 */
class GetCurrency extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/currency/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the currency
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Currency::from($response->json('data'));
    }
}
