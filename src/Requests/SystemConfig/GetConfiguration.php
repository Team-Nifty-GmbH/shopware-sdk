<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SystemConfig;

/**
 * getConfiguration
 *
 * Returns the configuration schema for the given domain.
 */
class GetConfiguration extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_action/system-config/schema";
	}


	/**
	 * @param string $domain The configuration domain.
	 */
	public function __construct(
		protected string $domain,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['domain' => $this->domain]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SystemConfig::from($response->json('data'));
    }
}
