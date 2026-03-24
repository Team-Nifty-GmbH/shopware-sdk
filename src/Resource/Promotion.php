<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Promotion\AggregatePromotion;
use TeamNiftyGmbH\Shopware\Requests\Promotion\CreatePromotion;
use TeamNiftyGmbH\Shopware\Requests\Promotion\DeletePromotion;
use TeamNiftyGmbH\Shopware\Requests\Promotion\GetPromotion;
use TeamNiftyGmbH\Shopware\Requests\Promotion\GetPromotionList;
use TeamNiftyGmbH\Shopware\Requests\Promotion\SearchPromotion;
use TeamNiftyGmbH\Shopware\Requests\Promotion\UpdatePromotion;

class Promotion extends BaseResource
{
	public function aggregatePromotion(array $data = []): Response
	{
		return $this->connector->send(new AggregatePromotion($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createPromotion(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreatePromotion($data, $response));
	}


	/**
	 * @param string $id Identifier for the promotion
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deletePromotion(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeletePromotion($id, $response));
	}


	/**
	 * @param string $id Identifier for the promotion
	 */
	public function getPromotion(string $id): Response
	{
		return $this->connector->send(new GetPromotion($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getPromotionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetPromotionList($limit, $page, $swQuery));
	}


	public function searchPromotion(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchPromotion($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the promotion
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updatePromotion(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdatePromotion($id, $data, $response));
	}
}
