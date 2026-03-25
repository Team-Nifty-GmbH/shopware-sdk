<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppAdministrationSnippet;

/**
 * getAppAdministrationSnippet
 *
 * Available since: 6.4.15.0
 */
class GetAppAdministrationSnippet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/app-administration-snippet/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_administration_snippet
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return AppAdministrationSnippet::from($response->json('data'));
    }
}
