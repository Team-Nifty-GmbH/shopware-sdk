<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts\AggregateProductCrossSellingAssignedProducts;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts\CreateProductCrossSellingAssignedProducts;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts\DeleteProductCrossSellingAssignedProducts;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts\GetProductCrossSellingAssignedProducts;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts\GetProductCrossSellingAssignedProductsList;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts\SearchProductCrossSellingAssignedProducts;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts\UpdateProductCrossSellingAssignedProducts;

class ProductCrossSellingAssignedProducts extends BaseResource
{
	public function aggregateProductCrossSellingAssignedProducts(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductCrossSellingAssignedProducts($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductCrossSellingAssignedProducts(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductCrossSellingAssignedProducts($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_cross_selling_assigned_products
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductCrossSellingAssignedProducts(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductCrossSellingAssignedProducts($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_cross_selling_assigned_products
	 */
	public function getProductCrossSellingAssignedProducts(string $id): Response
	{
		return $this->connector->send(new GetProductCrossSellingAssignedProducts($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductCrossSellingAssignedProductsList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductCrossSellingAssignedProductsList($limit, $page, $swQuery));
	}


	public function searchProductCrossSellingAssignedProducts(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductCrossSellingAssignedProducts($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_cross_selling_assigned_products
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductCrossSellingAssignedProducts(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductCrossSellingAssignedProducts($id, $data, $response));
	}
}
