<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroup\AggregatePropertyGroup;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroup\CreatePropertyGroup;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroup\DeletePropertyGroup;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroup\GetPropertyGroup;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroup\GetPropertyGroupList;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroup\SearchPropertyGroup;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroup\UpdatePropertyGroup;

class PropertyGroup extends BaseResource
{
    public function aggregatePropertyGroup(array $data = []): Response
    {
        return $this->connector->send(new AggregatePropertyGroup($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createPropertyGroup(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreatePropertyGroup($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the property_group
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deletePropertyGroup(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeletePropertyGroup($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the property_group
     */
    public function getPropertyGroup(string $id): Response
    {
        return $this->connector->send(new GetPropertyGroup($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getPropertyGroupList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetPropertyGroupList($limit, $page, $swQuery));
    }

    public function searchPropertyGroup(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchPropertyGroup($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the property_group
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updatePropertyGroup(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdatePropertyGroup($id, $data, $response));
    }
}
