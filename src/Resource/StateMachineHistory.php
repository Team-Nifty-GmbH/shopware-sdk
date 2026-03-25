<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\StateMachineHistory\AggregateStateMachineHistory;
use TeamNiftyGmbH\Shopware\Requests\StateMachineHistory\CreateStateMachineHistory;
use TeamNiftyGmbH\Shopware\Requests\StateMachineHistory\DeleteStateMachineHistory;
use TeamNiftyGmbH\Shopware\Requests\StateMachineHistory\GetStateMachineHistory;
use TeamNiftyGmbH\Shopware\Requests\StateMachineHistory\GetStateMachineHistoryList;
use TeamNiftyGmbH\Shopware\Requests\StateMachineHistory\SearchStateMachineHistory;
use TeamNiftyGmbH\Shopware\Requests\StateMachineHistory\UpdateStateMachineHistory;

class StateMachineHistory extends BaseResource
{
    public function aggregateStateMachineHistory(array $data = []): Response
    {
        return $this->connector->send(new AggregateStateMachineHistory($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createStateMachineHistory(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateStateMachineHistory($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the state_machine_history
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteStateMachineHistory(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteStateMachineHistory($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the state_machine_history
     */
    public function getStateMachineHistory(string $id): Response
    {
        return $this->connector->send(new GetStateMachineHistory($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getStateMachineHistoryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetStateMachineHistoryList($limit, $page, $swQuery));
    }

    public function searchStateMachineHistory(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchStateMachineHistory($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the state_machine_history
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateStateMachineHistory(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateStateMachineHistory($id, $data, $response));
    }
}
