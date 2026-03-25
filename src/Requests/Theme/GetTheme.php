<?php

namespace TeamNiftyGmbH\Shopware\Requests\Theme;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Theme;

/**
 * getTheme
 *
 * Available since: 6.0.0.0
 */
class GetTheme extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/theme/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the theme
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Theme::from($response->json('data'));
    }
}
