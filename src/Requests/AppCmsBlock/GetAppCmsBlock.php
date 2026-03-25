<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppCmsBlock;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppCmsBlock;

/**
 * getAppCmsBlock
 *
 * Available since: 6.4.2.0
 */
class GetAppCmsBlock extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/app-cms-block/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_cms_block
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return AppCmsBlock::from($response->json('data'));
    }
}
