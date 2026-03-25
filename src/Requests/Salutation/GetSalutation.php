<?php

namespace TeamNiftyGmbH\Shopware\Requests\Salutation;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Salutation;

/**
 * getSalutation
 *
 * Available since: 6.0.0.0
 */
class GetSalutation extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/salutation/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the salutation
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Salutation::from($response->json('data'));
    }
}
