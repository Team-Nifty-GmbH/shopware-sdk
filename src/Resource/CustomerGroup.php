<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomerGroup\AggregateCustomerGroup;
use TeamNiftyGmbH\Shopware\Requests\CustomerGroup\CreateCustomerGroup;
use TeamNiftyGmbH\Shopware\Requests\CustomerGroup\DeleteCustomerGroup;
use TeamNiftyGmbH\Shopware\Requests\CustomerGroup\GetCustomerGroup;
use TeamNiftyGmbH\Shopware\Requests\CustomerGroup\GetCustomerGroupList;
use TeamNiftyGmbH\Shopware\Requests\CustomerGroup\SearchCustomerGroup;
use TeamNiftyGmbH\Shopware\Requests\CustomerGroup\UpdateCustomerGroup;

class CustomerGroup extends BaseResource
{
    public function aggregateCustomerGroup(array $data = []): Response
    {
        return $this->connector->send(new AggregateCustomerGroup($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createCustomerGroup(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateCustomerGroup($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the customer_group
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteCustomerGroup(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteCustomerGroup($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the customer_group
     */
    public function getCustomerGroup(string $id): Response
    {
        return $this->connector->send(new GetCustomerGroup($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getCustomerGroupList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetCustomerGroupList($limit, $page, $swQuery));
    }

    public function searchCustomerGroup(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchCustomerGroup($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the customer_group
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateCustomerGroup(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateCustomerGroup($id, $data, $response));
    }
}
