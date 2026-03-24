<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\TaxRule\AggregateTaxRule;
use TeamNiftyGmbH\Shopware\Requests\TaxRule\CreateTaxRule;
use TeamNiftyGmbH\Shopware\Requests\TaxRule\DeleteTaxRule;
use TeamNiftyGmbH\Shopware\Requests\TaxRule\GetTaxRule;
use TeamNiftyGmbH\Shopware\Requests\TaxRule\GetTaxRuleList;
use TeamNiftyGmbH\Shopware\Requests\TaxRule\SearchTaxRule;
use TeamNiftyGmbH\Shopware\Requests\TaxRule\UpdateTaxRule;

class TaxRule extends BaseResource
{
	public function aggregateTaxRule(array $data = []): Response
	{
		return $this->connector->send(new AggregateTaxRule($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createTaxRule(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateTaxRule($data, $response));
	}


	/**
	 * @param string $id Identifier for the tax_rule
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteTaxRule(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteTaxRule($id, $response));
	}


	/**
	 * @param string $id Identifier for the tax_rule
	 */
	public function getTaxRule(string $id): Response
	{
		return $this->connector->send(new GetTaxRule($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getTaxRuleList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetTaxRuleList($limit, $page, $swQuery));
	}


	public function searchTaxRule(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchTaxRule($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the tax_rule
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateTaxRule(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateTaxRule($id, $data, $response));
	}
}
