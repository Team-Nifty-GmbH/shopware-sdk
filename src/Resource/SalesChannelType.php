<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelType\AggregateSalesChannelType;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelType\CreateSalesChannelType;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelType\DeleteSalesChannelType;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelType\GetSalesChannelType;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelType\GetSalesChannelTypeList;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelType\SearchSalesChannelType;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelType\UpdateSalesChannelType;

class SalesChannelType extends BaseResource
{
	public function aggregateSalesChannelType(array $data = []): Response
	{
		return $this->connector->send(new AggregateSalesChannelType($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createSalesChannelType(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateSalesChannelType($data, $response));
	}


	/**
	 * @param string $id Identifier for the sales_channel_type
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteSalesChannelType(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteSalesChannelType($id, $response));
	}


	/**
	 * @param string $id Identifier for the sales_channel_type
	 */
	public function getSalesChannelType(string $id): Response
	{
		return $this->connector->send(new GetSalesChannelType($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getSalesChannelTypeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetSalesChannelTypeList($limit, $page, $swQuery));
	}


	public function searchSalesChannelType(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchSalesChannelType($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the sales_channel_type
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateSalesChannelType(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateSalesChannelType($id, $data, $response));
	}
}
