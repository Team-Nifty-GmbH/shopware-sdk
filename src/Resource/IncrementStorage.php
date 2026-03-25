<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\IncrementStorage\DecrementValue;
use TeamNiftyGmbH\Shopware\Requests\IncrementStorage\DeleteIncrementKeys;
use TeamNiftyGmbH\Shopware\Requests\IncrementStorage\GetIncrementValues;
use TeamNiftyGmbH\Shopware\Requests\IncrementStorage\IncrementValue;
use TeamNiftyGmbH\Shopware\Requests\IncrementStorage\ResetIncrementValues;

class IncrementStorage extends BaseResource
{
    /**
     * @param  string  $pool  The name of the increment pool.
     * @param  null|string  $cluster  Optional cluster identifier for the decrement operation.
     */
    public function decrementValue(string $pool, array $data = [], ?string $cluster = null): Response
    {
        return $this->connector->send(new DecrementValue($pool, $data, $cluster));
    }

    /**
     * @param  string  $pool  The name of the increment pool to delete keys from.
     * @param  string  $cluster  Cluster identifier for the delete operation.
     */
    public function deleteIncrementKeys(string $pool, string $cluster): Response
    {
        return $this->connector->send(new DeleteIncrementKeys($pool, $cluster));
    }

    /**
     * @param  string  $pool  The name of the increment pool to list values from.
     * @param  string  $cluster  Cluster identifier for the increment operation.
     * @param  null|int  $limit  Maximum number of items to return.
     * @param  null|int  $offset  Number of items to skip for pagination.
     */
    public function getIncrementValues(string $pool, string $cluster, ?int $limit = null, ?int $offset = null): Response
    {
        return $this->connector->send(new GetIncrementValues($pool, $cluster, $limit, $offset));
    }

    /**
     * @param  string  $pool  The name of the increment pool (e.g., 'user_activity', 'message_queue').
     * @param  null|string  $cluster  Optional cluster identifier for the increment operation.
     */
    public function incrementValue(string $pool, array $data = [], ?string $cluster = null): Response
    {
        return $this->connector->send(new IncrementValue($pool, $data, $cluster));
    }

    /**
     * @param  string  $pool  The name of the increment pool to reset.
     * @param  string  $cluster  Cluster identifier for the reset operation.
     */
    public function resetIncrementValues(string $pool, string $cluster, array $data = []): Response
    {
        return $this->connector->send(new ResetIncrementValues($pool, $cluster, $data));
    }
}
