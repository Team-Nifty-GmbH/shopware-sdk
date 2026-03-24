<?php

namespace TeamNiftyGmbH\Shopware\Requests\Theme;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Theme;

/**
 * getThemeConfigurationStructuredFields
 *
 * Returns the theme configuration fields in a structured format with tabs, blocks, sections and fields
 */
class GetThemeConfigurationStructuredFields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_action/theme/{$this->themeId}/structured-fields";
	}


	/**
	 * @param string $themeId
	 */
	public function __construct(
		protected string $themeId,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Theme::from($response->json('data'));
    }
}
