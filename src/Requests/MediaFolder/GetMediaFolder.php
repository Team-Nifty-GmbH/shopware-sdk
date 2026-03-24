<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaFolder;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MediaFolder;

/**
 * getMediaFolder
 *
 * Available since: 6.0.0.0
 */
class GetMediaFolder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/media-folder/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media_folder
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MediaFolder::from($response->json('data'));
    }
}
