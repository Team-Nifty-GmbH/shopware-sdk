<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomerRecovery\AggregateCustomerRecovery;
use TeamNiftyGmbH\Shopware\Requests\CustomerRecovery\CreateCustomerRecovery;
use TeamNiftyGmbH\Shopware\Requests\CustomerRecovery\DeleteCustomerRecovery;
use TeamNiftyGmbH\Shopware\Requests\CustomerRecovery\GetCustomerRecovery;
use TeamNiftyGmbH\Shopware\Requests\CustomerRecovery\GetCustomerRecoveryList;
use TeamNiftyGmbH\Shopware\Requests\CustomerRecovery\SearchCustomerRecovery;
use TeamNiftyGmbH\Shopware\Requests\CustomerRecovery\UpdateCustomerRecovery;

class CustomerRecovery extends BaseResource
{
	public function aggregateCustomerRecovery(array $data = []): Response
	{
		return $this->connector->send(new AggregateCustomerRecovery($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCustomerRecovery(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCustomerRecovery($data, $response));
	}


	/**
	 * @param string $id Identifier for the customer_recovery
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCustomerRecovery(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCustomerRecovery($id, $response));
	}


	/**
	 * @param string $id Identifier for the customer_recovery
	 */
	public function getCustomerRecovery(string $id): Response
	{
		return $this->connector->send(new GetCustomerRecovery($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCustomerRecoveryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCustomerRecoveryList($limit, $page, $swQuery));
	}


	public function searchCustomerRecovery(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCustomerRecovery($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the customer_recovery
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCustomerRecovery(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCustomerRecovery($id, $data, $response));
	}
}
