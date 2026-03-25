<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppFlowAction\AggregateAppFlowAction;
use TeamNiftyGmbH\Shopware\Requests\AppFlowAction\CreateAppFlowAction;
use TeamNiftyGmbH\Shopware\Requests\AppFlowAction\DeleteAppFlowAction;
use TeamNiftyGmbH\Shopware\Requests\AppFlowAction\GetAppFlowAction;
use TeamNiftyGmbH\Shopware\Requests\AppFlowAction\GetAppFlowActionList;
use TeamNiftyGmbH\Shopware\Requests\AppFlowAction\SearchAppFlowAction;
use TeamNiftyGmbH\Shopware\Requests\AppFlowAction\UpdateAppFlowAction;

class AppFlowAction extends BaseResource
{
    public function aggregateAppFlowAction(array $data = []): Response
    {
        return $this->connector->send(new AggregateAppFlowAction($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createAppFlowAction(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateAppFlowAction($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_flow_action
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteAppFlowAction(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteAppFlowAction($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_flow_action
     */
    public function getAppFlowAction(string $id): Response
    {
        return $this->connector->send(new GetAppFlowAction($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getAppFlowActionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetAppFlowActionList($limit, $page, $swQuery));
    }

    public function searchAppFlowAction(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchAppFlowAction($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the app_flow_action
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateAppFlowAction(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateAppFlowAction($id, $data, $response));
    }
}
