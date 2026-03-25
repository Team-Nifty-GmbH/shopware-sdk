<?php

namespace TeamNiftyGmbH\Shopware\Requests\Tax;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Tax;

/**
 * getTax
 *
 * Available since: 6.0.0.0
 */
class GetTax extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/tax/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the tax
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Tax::from($response->json('data'));
    }
}
