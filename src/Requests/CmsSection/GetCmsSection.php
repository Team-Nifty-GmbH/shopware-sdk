<?php

namespace TeamNiftyGmbH\Shopware\Requests\CmsSection;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CmsSection;

/**
 * getCmsSection
 *
 * Available since: 6.0.0.0
 */
class GetCmsSection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/cms-section/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the cms_section
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return CmsSection::from($response->json('data'));
    }
}
