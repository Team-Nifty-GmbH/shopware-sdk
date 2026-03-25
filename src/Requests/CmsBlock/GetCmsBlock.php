<?php

namespace TeamNiftyGmbH\Shopware\Requests\CmsBlock;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CmsBlock;

/**
 * getCmsBlock
 *
 * Available since: 6.0.0.0
 */
class GetCmsBlock extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/cms-block/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the cms_block
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CmsBlock::from($response->json('data'));
    }
}
