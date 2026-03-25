<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation\AggregateCustomFieldSetRelation;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation\CreateCustomFieldSetRelation;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation\DeleteCustomFieldSetRelation;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation\GetCustomFieldSetRelation;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation\GetCustomFieldSetRelationList;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation\SearchCustomFieldSetRelation;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation\UpdateCustomFieldSetRelation;

class CustomFieldSetRelation extends BaseResource
{
    public function aggregateCustomFieldSetRelation(array $data = []): Response
    {
        return $this->connector->send(new AggregateCustomFieldSetRelation($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createCustomFieldSetRelation(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateCustomFieldSetRelation($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the custom_field_set_relation
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteCustomFieldSetRelation(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteCustomFieldSetRelation($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the custom_field_set_relation
     */
    public function getCustomFieldSetRelation(string $id): Response
    {
        return $this->connector->send(new GetCustomFieldSetRelation($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getCustomFieldSetRelationList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetCustomFieldSetRelationList($limit, $page, $swQuery));
    }

    public function searchCustomFieldSetRelation(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchCustomFieldSetRelation($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the custom_field_set_relation
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateCustomFieldSetRelation(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateCustomFieldSetRelation($id, $data, $response));
    }
}
