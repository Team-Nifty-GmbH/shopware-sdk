<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel\AggregateNumberRangeSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel\CreateNumberRangeSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel\DeleteNumberRangeSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel\GetNumberRangeSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel\GetNumberRangeSalesChannelList;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel\SearchNumberRangeSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel\UpdateNumberRangeSalesChannel;

class NumberRangeSalesChannel extends BaseResource
{
    public function aggregateNumberRangeSalesChannel(array $data = []): Response
    {
        return $this->connector->send(new AggregateNumberRangeSalesChannel($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createNumberRangeSalesChannel(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateNumberRangeSalesChannel($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the number_range_sales_channel
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteNumberRangeSalesChannel(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteNumberRangeSalesChannel($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the number_range_sales_channel
     */
    public function getNumberRangeSalesChannel(string $id): Response
    {
        return $this->connector->send(new GetNumberRangeSalesChannel($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getNumberRangeSalesChannelList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetNumberRangeSalesChannelList($limit, $page, $swQuery));
    }

    public function searchNumberRangeSalesChannel(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchNumberRangeSalesChannel($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the number_range_sales_channel
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateNumberRangeSalesChannel(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateNumberRangeSalesChannel($id, $data, $response));
    }
}
