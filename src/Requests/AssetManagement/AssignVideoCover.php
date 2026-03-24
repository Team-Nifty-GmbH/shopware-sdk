<?php

namespace TeamNiftyGmbH\Shopware\Requests\AssetManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * assignVideoCover
 *
 * Assigns an image as a cover for a video media entity, or removes the cover if `coverMediaId` is
 * null.
 */
class AssignVideoCover extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/media/{$this->mediaId}/video-cover";
	}


	/**
	 * @param mixed $mediaId ID of the video media entity
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
