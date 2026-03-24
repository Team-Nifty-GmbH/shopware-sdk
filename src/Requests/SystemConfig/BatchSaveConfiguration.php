<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemConfig;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * batchSaveConfiguration
 *
 * Saves configuration values for multiple sales channels at once. The request body is keyed by sales
 * channel ID (use "null" for global scope).
 */
class BatchSaveConfiguration extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/system-config/batch";
	}


	/**
	 * @param null|bool $silent If true, the HTTP cache will not be invalidated. Use this for internal configuration values that do not affect the storefront.
	 */
	public function __construct(
		protected array $data = [],
		protected ?bool $silent = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['silent' => $this->silent]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
