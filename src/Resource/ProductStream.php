<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductStream\AggregateProductStream;
use TeamNiftyGmbH\Shopware\Requests\ProductStream\CreateProductStream;
use TeamNiftyGmbH\Shopware\Requests\ProductStream\DeleteProductStream;
use TeamNiftyGmbH\Shopware\Requests\ProductStream\GetProductStream;
use TeamNiftyGmbH\Shopware\Requests\ProductStream\GetProductStreamList;
use TeamNiftyGmbH\Shopware\Requests\ProductStream\SearchProductStream;
use TeamNiftyGmbH\Shopware\Requests\ProductStream\UpdateProductStream;

class ProductStream extends BaseResource
{
	public function aggregateProductStream(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductStream($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductStream(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductStream($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_stream
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductStream(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductStream($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_stream
	 */
	public function getProductStream(string $id): Response
	{
		return $this->connector->send(new GetProductStream($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductStreamList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductStreamList($limit, $page, $swQuery));
	}


	public function searchProductStream(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductStream($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_stream
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductStream(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductStream($id, $data, $response));
	}
}
