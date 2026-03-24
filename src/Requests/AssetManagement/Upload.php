<?php

namespace TeamNiftyGmbH\Shopware\Requests\AssetManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * upload
 *
 * Adds a new file to a media entity. If the entity has an existing file, it will be replaced.
 *
 * The are
 * two methods of providing a file to this route:
 *  * Use a typical file upload and provide the file in
 * the request
 *  * Fetch the file from an url. This only works if the
 * `shopware.media.enable_url_upload_feature` variable is set to true in the shop environment.
 * To use
 * file upload via url, the content type has to be `application/json` and the parameter `url` has to be
 * provided.
 */
class Upload extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/media/{$this->mediaId}/upload";
	}


	/**
	 * @param mixed $mediaId Identifier of the media entity.
	 * @param null|string $fileName Name of the uploaded file. If not provided the media identifier will be used as name
	 * @param string $extension Extension of the uploaded file. For example `png`
	 */
	public function __construct(
		protected mixed $mediaId,
		protected string $extension,
		protected array $data = [],
		protected ?string $fileName = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['fileName' => $this->fileName, 'extension' => $this->extension]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
