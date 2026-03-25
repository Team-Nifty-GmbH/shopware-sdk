<?php

namespace TeamNiftyGmbH\Shopware\Requests\MainCategory;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MainCategory;

/**
 * getMainCategory
 *
 * Available since: 6.1.0.0
 */
class GetMainCategory extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/main-category/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the main_category
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return MainCategory::from($response->json('data'));
    }
}
