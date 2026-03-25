<?php

namespace TeamNiftyGmbH\Shopware\Requests\Language;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Language;

/**
 * getLanguage
 *
 * Available since: 6.0.0.0
 */
class GetLanguage extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/language/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the language
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Language::from($response->json('data'));
    }
}
