<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductManufacturer\AggregateProductManufacturer;
use TeamNiftyGmbH\Shopware\Requests\ProductManufacturer\CreateProductManufacturer;
use TeamNiftyGmbH\Shopware\Requests\ProductManufacturer\DeleteProductManufacturer;
use TeamNiftyGmbH\Shopware\Requests\ProductManufacturer\GetProductManufacturer;
use TeamNiftyGmbH\Shopware\Requests\ProductManufacturer\GetProductManufacturerList;
use TeamNiftyGmbH\Shopware\Requests\ProductManufacturer\SearchProductManufacturer;
use TeamNiftyGmbH\Shopware\Requests\ProductManufacturer\UpdateProductManufacturer;

class ProductManufacturer extends BaseResource
{
	public function aggregateProductManufacturer(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductManufacturer($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductManufacturer(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductManufacturer($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_manufacturer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductManufacturer(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductManufacturer($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_manufacturer
	 */
	public function getProductManufacturer(string $id): Response
	{
		return $this->connector->send(new GetProductManufacturer($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductManufacturerList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductManufacturerList($limit, $page, $swQuery));
	}


	public function searchProductManufacturer(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductManufacturer($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_manufacturer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductManufacturer(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductManufacturer($id, $data, $response));
	}
}
