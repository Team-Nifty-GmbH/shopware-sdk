<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SeoUrl\AggregateSeoUrl;
use TeamNiftyGmbH\Shopware\Requests\SeoUrl\CreateSeoUrl;
use TeamNiftyGmbH\Shopware\Requests\SeoUrl\DeleteSeoUrl;
use TeamNiftyGmbH\Shopware\Requests\SeoUrl\GetSeoUrl;
use TeamNiftyGmbH\Shopware\Requests\SeoUrl\GetSeoUrlList;
use TeamNiftyGmbH\Shopware\Requests\SeoUrl\SearchSeoUrl;
use TeamNiftyGmbH\Shopware\Requests\SeoUrl\UpdateSeoUrl;

class SeoUrl extends BaseResource
{
    public function aggregateSeoUrl(array $data = []): Response
    {
        return $this->connector->send(new AggregateSeoUrl($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createSeoUrl(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateSeoUrl($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the seo_url
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteSeoUrl(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteSeoUrl($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the seo_url
     */
    public function getSeoUrl(string $id): Response
    {
        return $this->connector->send(new GetSeoUrl($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getSeoUrlList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetSeoUrlList($limit, $page, $swQuery));
    }

    public function searchSeoUrl(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchSeoUrl($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the seo_url
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateSeoUrl(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateSeoUrl($id, $data, $response));
    }
}
