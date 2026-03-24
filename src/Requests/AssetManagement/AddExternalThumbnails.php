<?php

namespace TeamNiftyGmbH\Shopware\Requests\AssetManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * addExternalThumbnails
 *
 * Attaches external thumbnail URLs to an existing external media entity. The media must have an
 * HTTP/HTTPS path (i.e. be an external media link).
 *
 * Used for CDNs that pre-generated thumbnails
 * alongside the main media file.
 * Not to be confused with [remote
 * thumbnails](https://developer.shopware.com/docs/guides/plugins/plugins/content/media/remote-thumbnail-generation.html#remote-thumbnail-generation),
 * which are generated based on a pattern.
 *
 * The thumbnail sized are matched against existing thumbnails
 * sizes and a matching size will automatically be assigned. If there's not existing size, a **new
 * thumbnail size will automatically be created** for each missing size.
 */
class AddExternalThumbnails extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/media/{$this->mediaId}/external-thumbnails";
	}


	/**
	 * @param mixed $mediaId ID of the external media entity the thumbnails will be attached to.
	 */
	public function __construct(
		protected mixed $mediaId,
		protected array $data = [],
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
