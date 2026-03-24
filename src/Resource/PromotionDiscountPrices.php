<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices\AggregatePromotionDiscountPrices;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices\CreatePromotionDiscountPrices;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices\DeletePromotionDiscountPrices;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices\GetPromotionDiscountPrices;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices\GetPromotionDiscountPricesList;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices\SearchPromotionDiscountPrices;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscountPrices\UpdatePromotionDiscountPrices;

class PromotionDiscountPrices extends BaseResource
{
	public function aggregatePromotionDiscountPrices(array $data = []): Response
	{
		return $this->connector->send(new AggregatePromotionDiscountPrices($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createPromotionDiscountPrices(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreatePromotionDiscountPrices($data, $response));
	}


	/**
	 * @param string $id Identifier for the promotion_discount_prices
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deletePromotionDiscountPrices(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeletePromotionDiscountPrices($id, $response));
	}


	/**
	 * @param string $id Identifier for the promotion_discount_prices
	 */
	public function getPromotionDiscountPrices(string $id): Response
	{
		return $this->connector->send(new GetPromotionDiscountPrices($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getPromotionDiscountPricesList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetPromotionDiscountPricesList($limit, $page, $swQuery));
	}


	public function searchPromotionDiscountPrices(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchPromotionDiscountPrices($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the promotion_discount_prices
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updatePromotionDiscountPrices(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdatePromotionDiscountPrices($id, $data, $response));
	}
}
