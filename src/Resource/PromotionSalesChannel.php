<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel\AggregatePromotionSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel\CreatePromotionSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel\DeletePromotionSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel\GetPromotionSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel\GetPromotionSalesChannelList;
use TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel\SearchPromotionSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\PromotionSalesChannel\UpdatePromotionSalesChannel;

class PromotionSalesChannel extends BaseResource
{
    public function aggregatePromotionSalesChannel(array $data = []): Response
    {
        return $this->connector->send(new AggregatePromotionSalesChannel($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createPromotionSalesChannel(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreatePromotionSalesChannel($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the promotion_sales_channel
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deletePromotionSalesChannel(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeletePromotionSalesChannel($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the promotion_sales_channel
     */
    public function getPromotionSalesChannel(string $id): Response
    {
        return $this->connector->send(new GetPromotionSalesChannel($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getPromotionSalesChannelList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetPromotionSalesChannelList($limit, $page, $swQuery));
    }

    public function searchPromotionSalesChannel(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchPromotionSalesChannel($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the promotion_sales_channel
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updatePromotionSalesChannel(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdatePromotionSalesChannel($id, $data, $response));
    }
}
