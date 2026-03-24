<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethod\AggregateShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethod\CreateShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethod\DeleteShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethod\GetShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethod\GetShippingMethodList;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethod\SearchShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethod\UpdateShippingMethod;

class ShippingMethod extends BaseResource
{
	public function aggregateShippingMethod(array $data = []): Response
	{
		return $this->connector->send(new AggregateShippingMethod($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createShippingMethod(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateShippingMethod($data, $response));
	}


	/**
	 * @param string $id Identifier for the shipping_method
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteShippingMethod(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteShippingMethod($id, $response));
	}


	/**
	 * @param string $id Identifier for the shipping_method
	 */
	public function getShippingMethod(string $id): Response
	{
		return $this->connector->send(new GetShippingMethod($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getShippingMethodList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetShippingMethodList($limit, $page, $swQuery));
	}


	public function searchShippingMethod(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchShippingMethod($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the shipping_method
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateShippingMethod(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateShippingMethod($id, $data, $response));
	}
}
