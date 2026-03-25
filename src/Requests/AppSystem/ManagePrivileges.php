<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppSystem;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * managePrivileges
 *
 * Accepts or revokes specified privileges for the given app.
 */
class ManagePrivileges extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/app-system/{$this->appName}/privileges";
    }

    public function __construct(
        protected string $appName,
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
