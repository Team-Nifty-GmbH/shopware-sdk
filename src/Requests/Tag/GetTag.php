<?php

namespace TeamNiftyGmbH\Shopware\Requests\Tag;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Tag;

/**
 * getTag
 *
 * Available since: 6.0.0.0
 */
class GetTag extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/tag/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the tag
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Tag::from($response->json('data'));
    }
}
