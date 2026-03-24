<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup\AggregatePromotionSetgroup;
use TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup\CreatePromotionSetgroup;
use TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup\DeletePromotionSetgroup;
use TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup\GetPromotionSetgroup;
use TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup\GetPromotionSetgroupList;
use TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup\SearchPromotionSetgroup;
use TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup\UpdatePromotionSetgroup;

class PromotionSetgroup extends BaseResource
{
	public function aggregatePromotionSetgroup(array $data = []): Response
	{
		return $this->connector->send(new AggregatePromotionSetgroup($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createPromotionSetgroup(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreatePromotionSetgroup($data, $response));
	}


	/**
	 * @param string $id Identifier for the promotion_setgroup
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deletePromotionSetgroup(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeletePromotionSetgroup($id, $response));
	}


	/**
	 * @param string $id Identifier for the promotion_setgroup
	 */
	public function getPromotionSetgroup(string $id): Response
	{
		return $this->connector->send(new GetPromotionSetgroup($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getPromotionSetgroupList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetPromotionSetgroupList($limit, $page, $swQuery));
	}


	public function searchPromotionSetgroup(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchPromotionSetgroup($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the promotion_setgroup
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updatePromotionSetgroup(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdatePromotionSetgroup($id, $data, $response));
	}
}
