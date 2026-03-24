<?php

namespace TeamNiftyGmbH\Shopware\Requests\Theme;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * assignTheme
 *
 * Assigns a theme to a specific sales channel
 */
class AssignTheme extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/theme/{$this->themeId}/assign/{$this->salesChannelId}";
	}


	/**
	 * @param string $themeId
	 * @param string $salesChannelId
	 */
	public function __construct(
		protected string $themeId,
		protected string $salesChannelId,
		protected array $data = [],
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
