<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscount\AggregatePromotionDiscount;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscount\CreatePromotionDiscount;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscount\DeletePromotionDiscount;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscount\GetPromotionDiscount;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscount\GetPromotionDiscountList;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscount\SearchPromotionDiscount;
use TeamNiftyGmbH\Shopware\Requests\PromotionDiscount\UpdatePromotionDiscount;

class PromotionDiscount extends BaseResource
{
	public function aggregatePromotionDiscount(array $data = []): Response
	{
		return $this->connector->send(new AggregatePromotionDiscount($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createPromotionDiscount(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreatePromotionDiscount($data, $response));
	}


	/**
	 * @param string $id Identifier for the promotion_discount
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deletePromotionDiscount(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeletePromotionDiscount($id, $response));
	}


	/**
	 * @param string $id Identifier for the promotion_discount
	 */
	public function getPromotionDiscount(string $id): Response
	{
		return $this->connector->send(new GetPromotionDiscount($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getPromotionDiscountList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetPromotionDiscountList($limit, $page, $swQuery));
	}


	public function searchPromotionDiscount(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchPromotionDiscount($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the promotion_discount
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updatePromotionDiscount(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdatePromotionDiscount($id, $data, $response));
	}
}
