<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * config
 *
 * Returns non-sensitive system/runtime metadata used by the administration UI for initialization,
 * feature toggling, and diagnostics. Typical fields include platform/API version, active feature
 * flags, environment mode, available capabilities (e.g. workers, queue, cache), limits, and other
 * public configuration hints. Use this at admin startup to decide which features to enable and to
 * display environment information.
 */
class Config extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_info/config";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
