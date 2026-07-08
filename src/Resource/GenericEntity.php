<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\CreateEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\DeleteEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\GetEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\GetEntityList;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\SearchEntity;
use TeamNiftyGmbH\Shopware\Requests\GenericEntity\UpdateEntity;

class GenericEntity extends BaseResource
{
    public function __construct(Connector $connector, protected string $entityName)
    {
        parent::__construct($connector);
    }

    public function entityName(): string
    {
        return $this->entityName;
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function create(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateEntity($this->entityName, $data, $response));
    }

    public function get(string $id): Response
    {
        return $this->connector->send(new GetEntity($this->entityName, $id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $swQuery  Encoded SwagQL in JSON
     */
    public function getList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetEntityList($this->entityName, $limit, $page, $swQuery));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function update(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateEntity($this->entityName, $id, $data, $response));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function delete(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteEntity($this->entityName, $id, $response));
    }

    public function search(array $data = []): Response
    {
        return $this->connector->send(new SearchEntity($this->entityName, $data));
    }
}
