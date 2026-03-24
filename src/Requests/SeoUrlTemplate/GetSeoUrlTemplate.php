<?php

namespace TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SeoUrlTemplate;

/**
 * getSeoUrlTemplate
 *
 * Available since: 6.0.0.0
 */
class GetSeoUrlTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/seo-url-template/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the seo_url_template
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SeoUrlTemplate::from($response->json('data'));
    }
}
