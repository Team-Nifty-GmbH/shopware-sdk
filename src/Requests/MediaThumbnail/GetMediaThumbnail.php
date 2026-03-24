<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaThumbnail;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MediaThumbnail;

/**
 * getMediaThumbnail
 *
 * Available since: 6.0.0.0
 */
class GetMediaThumbnail extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/media-thumbnail/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media_thumbnail
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MediaThumbnail::from($response->json('data'));
    }
}
