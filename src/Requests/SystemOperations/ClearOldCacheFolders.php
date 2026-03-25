<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemOperations;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * clearOldCacheFolders
 *
 * Removes cache folders that are not needed anymore.
 */
class ClearOldCacheFolders extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/_action/cleanup';
    }

    public function __construct() {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
