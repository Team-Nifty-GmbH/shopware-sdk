<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\RuleCondition\AggregateRuleCondition;
use TeamNiftyGmbH\Shopware\Requests\RuleCondition\CreateRuleCondition;
use TeamNiftyGmbH\Shopware\Requests\RuleCondition\DeleteRuleCondition;
use TeamNiftyGmbH\Shopware\Requests\RuleCondition\GetRuleCondition;
use TeamNiftyGmbH\Shopware\Requests\RuleCondition\GetRuleConditionList;
use TeamNiftyGmbH\Shopware\Requests\RuleCondition\SearchRuleCondition;
use TeamNiftyGmbH\Shopware\Requests\RuleCondition\UpdateRuleCondition;

class RuleCondition extends BaseResource
{
    public function aggregateRuleCondition(array $data = []): Response
    {
        return $this->connector->send(new AggregateRuleCondition($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createRuleCondition(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateRuleCondition($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the rule_condition
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteRuleCondition(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteRuleCondition($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the rule_condition
     */
    public function getRuleCondition(string $id): Response
    {
        return $this->connector->send(new GetRuleCondition($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getRuleConditionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetRuleConditionList($limit, $page, $swQuery));
    }

    public function searchRuleCondition(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchRuleCondition($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the rule_condition
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateRuleCondition(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateRuleCondition($id, $data, $response));
    }
}
