<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SystemConfig;

/**
 * getConfigurationValues
 *
 * Returns the configuration values for the given domain and optional sales channel.
 */
class GetConfigurationValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_action/system-config";
	}


	/**
	 * @param string $domain The configuration domain.
	 * @param null|string $salesChannelId The sales channel ID to scope the configuration to.
	 * @param null|bool $inherit Whether to include inherited (global) values.
	 */
	public function __construct(
		protected string $domain,
		protected ?string $salesChannelId = null,
		protected ?bool $inherit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['domain' => $this->domain, 'salesChannelId' => $this->salesChannelId, 'inherit' => $this->inherit]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SystemConfig::from($response->json('data'));
    }
}
