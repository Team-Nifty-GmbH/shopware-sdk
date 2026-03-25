<?php

namespace TeamNiftyGmbH\Shopware\Requests\CmsPage;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CmsPage;

/**
 * getCmsPage
 *
 * Available since: 6.0.0.0
 */
class GetCmsPage extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/cms-page/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the cms_page
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CmsPage::from($response->json('data'));
    }
}
