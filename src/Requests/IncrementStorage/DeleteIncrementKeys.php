<?php

namespace TeamNiftyGmbH\Shopware\Requests\IncrementStorage;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteIncrementKeys
 *
 * Deletes specific increment keys from the specified pool.
 */
class DeleteIncrementKeys extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/_action/delete-increment/{$this->pool}";
	}


	/**
	 * @param string $pool The name of the increment pool to delete keys from.
	 * @param string $cluster Cluster identifier for the delete operation.
	 */
	public function __construct(
		protected string $pool,
		protected string $cluster,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['cluster' => $this->cluster]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
