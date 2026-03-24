<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MediaThumbnailSize;

/**
 * getMediaThumbnailSize
 *
 * Available since: 6.0.0.0
 */
class GetMediaThumbnailSize extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/media-thumbnail-size/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media_thumbnail_size
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MediaThumbnailSize::from($response->json('data'));
    }
}
