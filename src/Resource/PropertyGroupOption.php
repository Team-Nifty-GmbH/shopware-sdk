<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption\AggregatePropertyGroupOption;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption\CreatePropertyGroupOption;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption\DeletePropertyGroupOption;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption\GetPropertyGroupOption;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption\GetPropertyGroupOptionList;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption\SearchPropertyGroupOption;
use TeamNiftyGmbH\Shopware\Requests\PropertyGroupOption\UpdatePropertyGroupOption;

class PropertyGroupOption extends BaseResource
{
    public function aggregatePropertyGroupOption(array $data = []): Response
    {
        return $this->connector->send(new AggregatePropertyGroupOption($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createPropertyGroupOption(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreatePropertyGroupOption($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the property_group_option
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deletePropertyGroupOption(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeletePropertyGroupOption($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the property_group_option
     */
    public function getPropertyGroupOption(string $id): Response
    {
        return $this->connector->send(new GetPropertyGroupOption($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getPropertyGroupOptionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetPropertyGroupOptionList($limit, $page, $swQuery));
    }

    public function searchPropertyGroupOption(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchPropertyGroupOption($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the property_group_option
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updatePropertyGroupOption(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdatePropertyGroupOption($id, $data, $response));
    }
}
