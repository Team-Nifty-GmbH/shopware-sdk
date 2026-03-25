<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Salutation\AggregateSalutation;
use TeamNiftyGmbH\Shopware\Requests\Salutation\CreateSalutation;
use TeamNiftyGmbH\Shopware\Requests\Salutation\DeleteSalutation;
use TeamNiftyGmbH\Shopware\Requests\Salutation\GetSalutation;
use TeamNiftyGmbH\Shopware\Requests\Salutation\GetSalutationList;
use TeamNiftyGmbH\Shopware\Requests\Salutation\SearchSalutation;
use TeamNiftyGmbH\Shopware\Requests\Salutation\UpdateSalutation;

class Salutation extends BaseResource
{
    public function aggregateSalutation(array $data = []): Response
    {
        return $this->connector->send(new AggregateSalutation($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createSalutation(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateSalutation($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the salutation
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteSalutation(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteSalutation($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the salutation
     */
    public function getSalutation(string $id): Response
    {
        return $this->connector->send(new GetSalutation($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getSalutationList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetSalutationList($limit, $page, $swQuery));
    }

    public function searchSalutation(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchSalutation($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the salutation
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateSalutation(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateSalutation($id, $data, $response));
    }
}
