<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain\AggregateSalesChannelDomain;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain\CreateSalesChannelDomain;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain\DeleteSalesChannelDomain;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain\GetSalesChannelDomain;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain\GetSalesChannelDomainList;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain\SearchSalesChannelDomain;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain\UpdateSalesChannelDomain;

class SalesChannelDomain extends BaseResource
{
    public function aggregateSalesChannelDomain(array $data = []): Response
    {
        return $this->connector->send(new AggregateSalesChannelDomain($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createSalesChannelDomain(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateSalesChannelDomain($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_domain
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteSalesChannelDomain(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteSalesChannelDomain($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_domain
     */
    public function getSalesChannelDomain(string $id): Response
    {
        return $this->connector->send(new GetSalesChannelDomain($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getSalesChannelDomainList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetSalesChannelDomainList($limit, $page, $swQuery));
    }

    public function searchSalesChannelDomain(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchSalesChannelDomain($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_domain
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateSalesChannelDomain(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateSalesChannelDomain($id, $data, $response));
    }
}
