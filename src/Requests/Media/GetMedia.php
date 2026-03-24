<?php

namespace TeamNiftyGmbH\Shopware\Requests\Media;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Media;

/**
 * getMedia
 *
 * Available since: 6.0.0.0
 */
class GetMedia extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/media/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the media
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Media::from($response->json('data'));
    }
}
