<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductMedia;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductMedia;

/**
 * getProductMedia
 *
 * Available since: 6.0.0.0
 */
class GetProductMedia extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-media/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_media
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductMedia::from($response->json('data'));
    }
}
