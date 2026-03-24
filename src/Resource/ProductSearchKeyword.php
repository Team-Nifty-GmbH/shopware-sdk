<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword\AggregateProductSearchKeyword;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword\CreateProductSearchKeyword;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword\DeleteProductSearchKeyword;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword\GetProductSearchKeyword;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword\GetProductSearchKeywordList;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword\SearchProductSearchKeyword;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword\UpdateProductSearchKeyword;

class ProductSearchKeyword extends BaseResource
{
	public function aggregateProductSearchKeyword(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductSearchKeyword($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductSearchKeyword(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductSearchKeyword($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_search_keyword
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductSearchKeyword(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductSearchKeyword($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_search_keyword
	 */
	public function getProductSearchKeyword(string $id): Response
	{
		return $this->connector->send(new GetProductSearchKeyword($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductSearchKeywordList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductSearchKeywordList($limit, $page, $swQuery));
	}


	public function searchProductSearchKeyword(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductSearchKeyword($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_search_keyword
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductSearchKeyword(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductSearchKeyword($id, $data, $response));
	}
}
