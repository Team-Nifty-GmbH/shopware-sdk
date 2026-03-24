<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductSorting\AggregateProductSorting;
use TeamNiftyGmbH\Shopware\Requests\ProductSorting\CreateProductSorting;
use TeamNiftyGmbH\Shopware\Requests\ProductSorting\DeleteProductSorting;
use TeamNiftyGmbH\Shopware\Requests\ProductSorting\GetProductSorting;
use TeamNiftyGmbH\Shopware\Requests\ProductSorting\GetProductSortingList;
use TeamNiftyGmbH\Shopware\Requests\ProductSorting\SearchProductSorting;
use TeamNiftyGmbH\Shopware\Requests\ProductSorting\UpdateProductSorting;

class ProductSorting extends BaseResource
{
	public function aggregateProductSorting(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductSorting($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductSorting(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductSorting($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_sorting
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductSorting(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductSorting($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_sorting
	 */
	public function getProductSorting(string $id): Response
	{
		return $this->connector->send(new GetProductSorting($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductSortingList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductSortingList($limit, $page, $swQuery));
	}


	public function searchProductSorting(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductSorting($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_sorting
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductSorting(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductSorting($id, $data, $response));
	}
}
