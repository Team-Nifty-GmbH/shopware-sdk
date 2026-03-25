<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemOperations;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * clearCacheDelayed
 *
 * Directly triggers invalidation of all cache tags that were marked for invalidation.
 */
class ClearCacheDelayed extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/_action/cache-delayed';
    }

    /**
     * @param  null|bool  $refreshOpenSearch  This parameter indicates that in addition to invalidating the delayed caches, the opensearch indices will also be refreshed, which should lead to a clean state on the next read requests. When OpenSearch is not used this parameter will be ignored.
     */
    public function __construct(
        protected ?bool $refreshOpenSearch = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['refreshOpenSearch' => $this->refreshOpenSearch]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
