<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomEntity\AggregateCustomEntity;
use TeamNiftyGmbH\Shopware\Requests\CustomEntity\CreateCustomEntity;
use TeamNiftyGmbH\Shopware\Requests\CustomEntity\DeleteCustomEntity;
use TeamNiftyGmbH\Shopware\Requests\CustomEntity\GetCustomEntity;
use TeamNiftyGmbH\Shopware\Requests\CustomEntity\GetCustomEntityList;
use TeamNiftyGmbH\Shopware\Requests\CustomEntity\SearchCustomEntity;
use TeamNiftyGmbH\Shopware\Requests\CustomEntity\UpdateCustomEntity;

class CustomEntity extends BaseResource
{
    public function aggregateCustomEntity(array $data = []): Response
    {
        return $this->connector->send(new AggregateCustomEntity($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createCustomEntity(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateCustomEntity($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the custom_entity
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteCustomEntity(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteCustomEntity($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the custom_entity
     */
    public function getCustomEntity(string $id): Response
    {
        return $this->connector->send(new GetCustomEntity($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getCustomEntityList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetCustomEntityList($limit, $page, $swQuery));
    }

    public function searchCustomEntity(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchCustomEntity($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the custom_entity
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateCustomEntity(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateCustomEntity($id, $data, $response));
    }
}
