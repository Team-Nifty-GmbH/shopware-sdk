<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MediaDefaultFolder;

/**
 * getMediaDefaultFolder
 *
 * Available since: 6.0.0.0
 */
class GetMediaDefaultFolder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/media-default-folder/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media_default_folder
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MediaDefaultFolder::from($response->json('data'));
    }
}
