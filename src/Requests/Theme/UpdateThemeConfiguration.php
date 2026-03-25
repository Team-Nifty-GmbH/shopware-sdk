<?php

namespace TeamNiftyGmbH\Shopware\Requests\Theme;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\Theme;

/**
 * updateThemeConfiguration
 *
 * Updates the configuration of a theme. The theme configuration is a collection of fields that are
 * provided as variables in the theme's SCSS files and the templates.
 */
class UpdateThemeConfiguration extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/_action/theme/{$this->themeId}";
    }

    /**
     * @param  string  $themeId  The ID of the theme to update
     * @param  null|string  $parentThemeId  The ID of the parent theme to inherit the configuration from.
     * @param  null|bool  $reset  If true, the theme configuration will be reset to the default values from the theme.json file.
     * @param  null|bool  $validate  If true, the theme configuration will be validated before being updated.
     * @param  null|bool  $sanitize  If true, the theme configuration will be sanitized during validation. before being updated. Only applies if validate is true.
     */
    public function __construct(
        protected string $themeId,
        protected array $data,
        protected ?string $parentThemeId = null,
        protected ?bool $reset = null,
        protected ?bool $validate = null,
        protected ?bool $sanitize = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'parentThemeId' => $this->parentThemeId,
            'reset' => $this->reset,
            'validate' => $this->validate,
            'sanitize' => $this->sanitize,
        ]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return Theme::from($response->json('data'));
    }
}
