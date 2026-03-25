<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppSystem;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appSecretRotation
 *
 * Initiates an app secret rotation for the calling app. Needs to be called with an integration token
 * belonging to an app. Note that the secret rotation will only be scheduled and then handled
 * asynchronously.
 */
class AppSecretRotation extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/_action/app-system/secret/rotate';
    }

    public function __construct(
        protected array $data = [],
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
