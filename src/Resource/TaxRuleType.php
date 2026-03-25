<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\TaxRuleType\AggregateTaxRuleType;
use TeamNiftyGmbH\Shopware\Requests\TaxRuleType\CreateTaxRuleType;
use TeamNiftyGmbH\Shopware\Requests\TaxRuleType\DeleteTaxRuleType;
use TeamNiftyGmbH\Shopware\Requests\TaxRuleType\GetTaxRuleType;
use TeamNiftyGmbH\Shopware\Requests\TaxRuleType\GetTaxRuleTypeList;
use TeamNiftyGmbH\Shopware\Requests\TaxRuleType\SearchTaxRuleType;
use TeamNiftyGmbH\Shopware\Requests\TaxRuleType\UpdateTaxRuleType;

class TaxRuleType extends BaseResource
{
    public function aggregateTaxRuleType(array $data = []): Response
    {
        return $this->connector->send(new AggregateTaxRuleType($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createTaxRuleType(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateTaxRuleType($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the tax_rule_type
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteTaxRuleType(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteTaxRuleType($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the tax_rule_type
     */
    public function getTaxRuleType(string $id): Response
    {
        return $this->connector->send(new GetTaxRuleType($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getTaxRuleTypeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetTaxRuleTypeList($limit, $page, $swQuery));
    }

    public function searchTaxRuleType(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchTaxRuleType($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the tax_rule_type
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateTaxRuleType(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateTaxRuleType($id, $data, $response));
    }
}
