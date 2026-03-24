<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Rule\AggregateRule;
use TeamNiftyGmbH\Shopware\Requests\Rule\CreateRule;
use TeamNiftyGmbH\Shopware\Requests\Rule\DeleteRule;
use TeamNiftyGmbH\Shopware\Requests\Rule\GetRule;
use TeamNiftyGmbH\Shopware\Requests\Rule\GetRuleList;
use TeamNiftyGmbH\Shopware\Requests\Rule\SearchRule;
use TeamNiftyGmbH\Shopware\Requests\Rule\UpdateRule;

class Rule extends BaseResource
{
	public function aggregateRule(array $data = []): Response
	{
		return $this->connector->send(new AggregateRule($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createRule(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateRule($data, $response));
	}


	/**
	 * @param string $id Identifier for the rule
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteRule(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteRule($id, $response));
	}


	/**
	 * @param string $id Identifier for the rule
	 */
	public function getRule(string $id): Response
	{
		return $this->connector->send(new GetRule($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getRuleList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetRuleList($limit, $page, $swQuery));
	}


	public function searchRule(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchRule($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the rule
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateRule(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateRule($id, $data, $response));
	}
}
