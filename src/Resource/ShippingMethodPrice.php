<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice\AggregateShippingMethodPrice;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice\CreateShippingMethodPrice;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice\DeleteShippingMethodPrice;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice\GetShippingMethodPrice;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice\GetShippingMethodPriceList;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice\SearchShippingMethodPrice;
use TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice\UpdateShippingMethodPrice;

class ShippingMethodPrice extends BaseResource
{
    public function aggregateShippingMethodPrice(array $data = []): Response
    {
        return $this->connector->send(new AggregateShippingMethodPrice($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createShippingMethodPrice(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateShippingMethodPrice($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the shipping_method_price
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteShippingMethodPrice(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteShippingMethodPrice($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the shipping_method_price
     */
    public function getShippingMethodPrice(string $id): Response
    {
        return $this->connector->send(new GetShippingMethodPrice($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getShippingMethodPriceList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetShippingMethodPriceList($limit, $page, $swQuery));
    }

    public function searchShippingMethodPrice(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchShippingMethodPrice($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the shipping_method_price
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateShippingMethodPrice(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateShippingMethodPrice($id, $data, $response));
    }
}
