<?php

namespace TeamNiftyGmbH\Shopware\Requests\AssetManagement;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteExternalThumbnails
 *
 * Removes all externally stored thumbnail entries from the given media entity. Only works on external
 * media (media with an HTTP/HTTPS path). Used to replace outdated thumbnails with new ones.
 */
class DeleteExternalThumbnails extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/_action/media/{$this->mediaId}/external-thumbnails";
	}


	/**
	 * @param mixed $mediaId ID of the external media entity the thumbnails will be deleted from..
	 */
	public function __construct(
		protected mixed $mediaId,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
