<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter\AggregateProductStreamFilter;
use TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter\CreateProductStreamFilter;
use TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter\DeleteProductStreamFilter;
use TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter\GetProductStreamFilter;
use TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter\GetProductStreamFilterList;
use TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter\SearchProductStreamFilter;
use TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter\UpdateProductStreamFilter;

class ProductStreamFilter extends BaseResource
{
	public function aggregateProductStreamFilter(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductStreamFilter($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductStreamFilter(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductStreamFilter($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_stream_filter
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductStreamFilter(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductStreamFilter($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_stream_filter
	 */
	public function getProductStreamFilter(string $id): Response
	{
		return $this->connector->send(new GetProductStreamFilter($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductStreamFilterList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductStreamFilterList($limit, $page, $swQuery));
	}


	public function searchProductStreamFilter(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductStreamFilter($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_stream_filter
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductStreamFilter(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductStreamFilter($id, $data, $response));
	}
}
