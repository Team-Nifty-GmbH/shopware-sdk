<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SalesChannel\AggregateSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\SalesChannel\CreateSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\SalesChannel\DeleteSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\SalesChannel\GetSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\SalesChannel\GetSalesChannelList;
use TeamNiftyGmbH\Shopware\Requests\SalesChannel\SearchSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\SalesChannel\UpdateSalesChannel;

class SalesChannel extends BaseResource
{
	public function aggregateSalesChannel(array $data = []): Response
	{
		return $this->connector->send(new AggregateSalesChannel($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createSalesChannel(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateSalesChannel($data, $response));
	}


	/**
	 * @param string $id Identifier for the sales_channel
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteSalesChannel(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteSalesChannel($id, $response));
	}


	/**
	 * @param string $id Identifier for the sales_channel
	 */
	public function getSalesChannel(string $id): Response
	{
		return $this->connector->send(new GetSalesChannel($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getSalesChannelList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetSalesChannelList($limit, $page, $swQuery));
	}


	public function searchSalesChannel(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchSalesChannel($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the sales_channel
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateSalesChannel(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateSalesChannel($id, $data, $response));
	}
}
