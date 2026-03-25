<?php

namespace TeamNiftyGmbH\Shopware\Requests\Theme;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Theme;

/**
 * getThemeConfiguration
 *
 * Returns the theme configuration including fields, blocks, and current values
 */
class GetThemeConfiguration extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/_action/theme/{$this->themeId}/configuration";
    }

    public function __construct(
        protected string $themeId,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Theme::from($response->json('data'));
    }
}
