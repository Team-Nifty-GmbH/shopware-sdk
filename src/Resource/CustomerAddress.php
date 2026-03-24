<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomerAddress\AggregateCustomerAddress;
use TeamNiftyGmbH\Shopware\Requests\CustomerAddress\CreateCustomerAddress;
use TeamNiftyGmbH\Shopware\Requests\CustomerAddress\DeleteCustomerAddress;
use TeamNiftyGmbH\Shopware\Requests\CustomerAddress\GetCustomerAddress;
use TeamNiftyGmbH\Shopware\Requests\CustomerAddress\GetCustomerAddressList;
use TeamNiftyGmbH\Shopware\Requests\CustomerAddress\SearchCustomerAddress;
use TeamNiftyGmbH\Shopware\Requests\CustomerAddress\UpdateCustomerAddress;

class CustomerAddress extends BaseResource
{
	public function aggregateCustomerAddress(array $data = []): Response
	{
		return $this->connector->send(new AggregateCustomerAddress($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCustomerAddress(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCustomerAddress($data, $response));
	}


	/**
	 * @param string $id Identifier for the customer_address
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCustomerAddress(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCustomerAddress($id, $response));
	}


	/**
	 * @param string $id Identifier for the customer_address
	 */
	public function getCustomerAddress(string $id): Response
	{
		return $this->connector->send(new GetCustomerAddress($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCustomerAddressList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCustomerAddressList($limit, $page, $swQuery));
	}


	public function searchCustomerAddress(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCustomerAddress($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the customer_address
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCustomerAddress(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCustomerAddress($id, $data, $response));
	}
}
