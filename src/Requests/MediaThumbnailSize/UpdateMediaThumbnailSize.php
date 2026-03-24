<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MediaThumbnailSize;

/**
 * updateMediaThumbnailSize
 *
 * Available since: 6.0.0.0
 */
class UpdateMediaThumbnailSize extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/media-thumbnail-size/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media_thumbnail_size
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected array $data,
		protected ?string $response = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MediaThumbnailSize::from($response->json('data'));
    }
}
