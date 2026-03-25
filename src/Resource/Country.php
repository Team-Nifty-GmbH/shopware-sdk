<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Country\AggregateCountry;
use TeamNiftyGmbH\Shopware\Requests\Country\CreateCountry;
use TeamNiftyGmbH\Shopware\Requests\Country\DeleteCountry;
use TeamNiftyGmbH\Shopware\Requests\Country\GetCountry;
use TeamNiftyGmbH\Shopware\Requests\Country\GetCountryList;
use TeamNiftyGmbH\Shopware\Requests\Country\SearchCountry;
use TeamNiftyGmbH\Shopware\Requests\Country\UpdateCountry;

class Country extends BaseResource
{
    public function aggregateCountry(array $data = []): Response
    {
        return $this->connector->send(new AggregateCountry($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createCountry(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateCountry($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the country
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteCountry(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteCountry($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the country
     */
    public function getCountry(string $id): Response
    {
        return $this->connector->send(new GetCountry($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getCountryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetCountryList($limit, $page, $swQuery));
    }

    public function searchCountry(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchCountry($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the country
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateCountry(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateCountry($id, $data, $response));
    }
}
