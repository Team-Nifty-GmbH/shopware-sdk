<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaThumbnail;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteMediaThumbnail
 *
 * Available since: 6.0.0.0
 */
class DeleteMediaThumbnail extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/media-thumbnail/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the media_thumbnail
     * @param  null|string  $responseFormat  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $responseFormat = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->responseFormat]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
