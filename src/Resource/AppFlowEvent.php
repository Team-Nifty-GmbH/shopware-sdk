<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppFlowEvent\AggregateAppFlowEvent;
use TeamNiftyGmbH\Shopware\Requests\AppFlowEvent\CreateAppFlowEvent;
use TeamNiftyGmbH\Shopware\Requests\AppFlowEvent\DeleteAppFlowEvent;
use TeamNiftyGmbH\Shopware\Requests\AppFlowEvent\GetAppFlowEvent;
use TeamNiftyGmbH\Shopware\Requests\AppFlowEvent\GetAppFlowEventList;
use TeamNiftyGmbH\Shopware\Requests\AppFlowEvent\SearchAppFlowEvent;
use TeamNiftyGmbH\Shopware\Requests\AppFlowEvent\UpdateAppFlowEvent;

class AppFlowEvent extends BaseResource
{
    public function aggregateAppFlowEvent(array $data = []): Response
    {
        return $this->connector->send(new AggregateAppFlowEvent($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createAppFlowEvent(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateAppFlowEvent($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_flow_event
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteAppFlowEvent(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteAppFlowEvent($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_flow_event
     */
    public function getAppFlowEvent(string $id): Response
    {
        return $this->connector->send(new GetAppFlowEvent($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getAppFlowEventList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetAppFlowEventList($limit, $page, $swQuery));
    }

    public function searchAppFlowEvent(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchAppFlowEvent($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the app_flow_event
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateAppFlowEvent(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateAppFlowEvent($id, $data, $response));
    }
}
