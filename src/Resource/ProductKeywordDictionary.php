<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary\AggregateProductKeywordDictionary;
use TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary\CreateProductKeywordDictionary;
use TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary\DeleteProductKeywordDictionary;
use TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary\GetProductKeywordDictionary;
use TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary\GetProductKeywordDictionaryList;
use TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary\SearchProductKeywordDictionary;
use TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary\UpdateProductKeywordDictionary;

class ProductKeywordDictionary extends BaseResource
{
	public function aggregateProductKeywordDictionary(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductKeywordDictionary($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductKeywordDictionary(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductKeywordDictionary($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_keyword_dictionary
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductKeywordDictionary(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductKeywordDictionary($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_keyword_dictionary
	 */
	public function getProductKeywordDictionary(string $id): Response
	{
		return $this->connector->send(new GetProductKeywordDictionary($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductKeywordDictionaryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductKeywordDictionaryList($limit, $page, $swQuery));
	}


	public function searchProductKeywordDictionary(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductKeywordDictionary($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_keyword_dictionary
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductKeywordDictionary(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductKeywordDictionary($id, $data, $response));
	}
}
