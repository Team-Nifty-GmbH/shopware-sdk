<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppShippingMethod\AggregateAppShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\AppShippingMethod\CreateAppShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\AppShippingMethod\DeleteAppShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\AppShippingMethod\GetAppShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\AppShippingMethod\GetAppShippingMethodList;
use TeamNiftyGmbH\Shopware\Requests\AppShippingMethod\SearchAppShippingMethod;
use TeamNiftyGmbH\Shopware\Requests\AppShippingMethod\UpdateAppShippingMethod;

class AppShippingMethod extends BaseResource
{
    public function aggregateAppShippingMethod(array $data = []): Response
    {
        return $this->connector->send(new AggregateAppShippingMethod($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createAppShippingMethod(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateAppShippingMethod($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_shipping_method
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteAppShippingMethod(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteAppShippingMethod($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_shipping_method
     */
    public function getAppShippingMethod(string $id): Response
    {
        return $this->connector->send(new GetAppShippingMethod($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getAppShippingMethodList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetAppShippingMethodList($limit, $page, $swQuery));
    }

    public function searchAppShippingMethod(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchAppShippingMethod($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the app_shipping_method
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateAppShippingMethod(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateAppShippingMethod($id, $data, $response));
    }
}
