<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Locale\AggregateLocale;
use TeamNiftyGmbH\Shopware\Requests\Locale\CreateLocale;
use TeamNiftyGmbH\Shopware\Requests\Locale\DeleteLocale;
use TeamNiftyGmbH\Shopware\Requests\Locale\GetLocale;
use TeamNiftyGmbH\Shopware\Requests\Locale\GetLocaleList;
use TeamNiftyGmbH\Shopware\Requests\Locale\SearchLocale;
use TeamNiftyGmbH\Shopware\Requests\Locale\UpdateLocale;

class Locale extends BaseResource
{
    public function aggregateLocale(array $data = []): Response
    {
        return $this->connector->send(new AggregateLocale($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createLocale(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateLocale($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the locale
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteLocale(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteLocale($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the locale
     */
    public function getLocale(string $id): Response
    {
        return $this->connector->send(new GetLocale($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getLocaleList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetLocaleList($limit, $page, $swQuery));
    }

    public function searchLocale(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchLocale($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the locale
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateLocale(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateLocale($id, $data, $response));
    }
}
