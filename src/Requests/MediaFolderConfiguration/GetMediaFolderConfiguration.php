<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MediaFolderConfiguration;

/**
 * getMediaFolderConfiguration
 *
 * Available since: 6.0.0.0
 */
class GetMediaFolderConfiguration extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/media-folder-configuration/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media_folder_configuration
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MediaFolderConfiguration::from($response->json('data'));
    }
}
