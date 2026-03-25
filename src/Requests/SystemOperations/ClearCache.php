<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemOperations;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * clearCache
 *
 * The cache is immediately cleared synchronously for all used adapters.
 */
class ClearCache extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/_action/cache';
    }

    public function __construct() {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
