<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload\AggregateOrderLineItemDownload;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload\CreateOrderLineItemDownload;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload\DeleteOrderLineItemDownload;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload\GetOrderLineItemDownload;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload\GetOrderLineItemDownloadList;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload\SearchOrderLineItemDownload;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItemDownload\UpdateOrderLineItemDownload;

class OrderLineItemDownload extends BaseResource
{
    public function aggregateOrderLineItemDownload(array $data = []): Response
    {
        return $this->connector->send(new AggregateOrderLineItemDownload($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createOrderLineItemDownload(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateOrderLineItemDownload($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_line_item_download
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteOrderLineItemDownload(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteOrderLineItemDownload($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_line_item_download
     */
    public function getOrderLineItemDownload(string $id): Response
    {
        return $this->connector->send(new GetOrderLineItemDownload($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getOrderLineItemDownloadList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetOrderLineItemDownloadList($limit, $page, $swQuery));
    }

    public function searchOrderLineItemDownload(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchOrderLineItemDownload($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the order_line_item_download
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateOrderLineItemDownload(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateOrderLineItemDownload($id, $data, $response));
    }
}
