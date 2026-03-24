<?php

namespace TeamNiftyGmbH\Shopware\Requests\CmsSection;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCmsSection
 *
 * Available since: 6.0.0.0
 */
class DeleteCmsSection extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/cms-section/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the cms_section
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
