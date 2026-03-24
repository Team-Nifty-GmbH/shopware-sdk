<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Customer\AggregateCustomer;
use TeamNiftyGmbH\Shopware\Requests\Customer\CreateCustomer;
use TeamNiftyGmbH\Shopware\Requests\Customer\DeleteCustomer;
use TeamNiftyGmbH\Shopware\Requests\Customer\GetCustomer;
use TeamNiftyGmbH\Shopware\Requests\Customer\GetCustomerList;
use TeamNiftyGmbH\Shopware\Requests\Customer\SearchCustomer;
use TeamNiftyGmbH\Shopware\Requests\Customer\UpdateCustomer;

class Customer extends BaseResource
{
	public function aggregateCustomer(array $data = []): Response
	{
		return $this->connector->send(new AggregateCustomer($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCustomer(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCustomer($data, $response));
	}


	/**
	 * @param string $id Identifier for the customer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCustomer(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCustomer($id, $response));
	}


	/**
	 * @param string $id Identifier for the customer
	 */
	public function getCustomer(string $id): Response
	{
		return $this->connector->send(new GetCustomer($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCustomerList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCustomerList($limit, $page, $swQuery));
	}


	public function searchCustomer(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCustomer($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the customer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCustomer(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCustomer($id, $data, $response));
	}
}
