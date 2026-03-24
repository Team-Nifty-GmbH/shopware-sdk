<?php

namespace TeamNiftyGmbH\Shopware\Requests\SeoUrl;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SeoUrl;

/**
 * getSeoUrl
 *
 * Available since: 6.0.0.0
 */
class GetSeoUrl extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/seo-url/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the seo_url
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SeoUrl::from($response->json('data'));
    }
}
