<?php

namespace TeamNiftyGmbH\Shopware\Requests\Theme;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * resetTheme
 *
 * Resets the theme configuration to its default values
 */
class ResetTheme extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/_action/theme/{$this->themeId}/reset";
    }

    public function __construct(
        protected string $themeId,
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
