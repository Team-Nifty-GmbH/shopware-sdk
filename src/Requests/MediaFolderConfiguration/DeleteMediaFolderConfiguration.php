<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteMediaFolderConfiguration
 *
 * Available since: 6.0.0.0
 */
class DeleteMediaFolderConfiguration extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/media-folder-configuration/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media_folder_configuration
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected ?string $response = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
