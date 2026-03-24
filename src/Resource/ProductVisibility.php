<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductVisibility\AggregateProductVisibility;
use TeamNiftyGmbH\Shopware\Requests\ProductVisibility\CreateProductVisibility;
use TeamNiftyGmbH\Shopware\Requests\ProductVisibility\DeleteProductVisibility;
use TeamNiftyGmbH\Shopware\Requests\ProductVisibility\GetProductVisibility;
use TeamNiftyGmbH\Shopware\Requests\ProductVisibility\GetProductVisibilityList;
use TeamNiftyGmbH\Shopware\Requests\ProductVisibility\SearchProductVisibility;
use TeamNiftyGmbH\Shopware\Requests\ProductVisibility\UpdateProductVisibility;

class ProductVisibility extends BaseResource
{
	public function aggregateProductVisibility(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductVisibility($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductVisibility(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductVisibility($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_visibility
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductVisibility(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductVisibility($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_visibility
	 */
	public function getProductVisibility(string $id): Response
	{
		return $this->connector->send(new GetProductVisibility($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductVisibilityList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductVisibilityList($limit, $page, $swQuery));
	}


	public function searchProductVisibility(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductVisibility($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_visibility
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductVisibility(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductVisibility($id, $data, $response));
	}
}
