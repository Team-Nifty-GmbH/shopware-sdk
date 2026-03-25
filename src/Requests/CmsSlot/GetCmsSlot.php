<?php

namespace TeamNiftyGmbH\Shopware\Requests\CmsSlot;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CmsSlot;

/**
 * getCmsSlot
 *
 * Available since: 6.0.0.0
 */
class GetCmsSlot extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/cms-slot/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the cms_slot
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CmsSlot::from($response->json('data'));
    }
}
