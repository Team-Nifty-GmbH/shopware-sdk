<?php

namespace TeamNiftyGmbH\Shopware\Requests\IncrementStorage;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * getIncrementValues
 *
 * Retrieves a list of increment values from the specified pool with pagination support.
 */
class GetIncrementValues extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/_action/increment/{$this->pool}";
    }

    /**
     * @param  string  $pool  The name of the increment pool to list values from.
     * @param  string  $cluster  Cluster identifier for the increment operation.
     * @param  null|int  $limit  Maximum number of items to return.
     * @param  null|int  $offset  Number of items to skip for pagination.
     */
    public function __construct(
        protected string $pool,
        protected string $cluster,
        protected ?int $limit = null,
        protected ?int $offset = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['cluster' => $this->cluster, 'limit' => $this->limit, 'offset' => $this->offset]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
