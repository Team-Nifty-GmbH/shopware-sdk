<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics\AggregateSalesChannelAnalytics;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics\CreateSalesChannelAnalytics;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics\DeleteSalesChannelAnalytics;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics\GetSalesChannelAnalytics;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics\GetSalesChannelAnalyticsList;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics\SearchSalesChannelAnalytics;
use TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics\UpdateSalesChannelAnalytics;

class SalesChannelAnalytics extends BaseResource
{
    public function aggregateSalesChannelAnalytics(array $data = []): Response
    {
        return $this->connector->send(new AggregateSalesChannelAnalytics($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createSalesChannelAnalytics(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateSalesChannelAnalytics($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_analytics
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteSalesChannelAnalytics(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteSalesChannelAnalytics($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_analytics
     */
    public function getSalesChannelAnalytics(string $id): Response
    {
        return $this->connector->send(new GetSalesChannelAnalytics($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getSalesChannelAnalyticsList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetSalesChannelAnalyticsList($limit, $page, $swQuery));
    }

    public function searchSalesChannelAnalytics(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchSalesChannelAnalytics($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the sales_channel_analytics
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateSalesChannelAnalytics(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateSalesChannelAnalytics($id, $data, $response));
    }
}
