<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\UserRecovery\AggregateUserRecovery;
use TeamNiftyGmbH\Shopware\Requests\UserRecovery\CreateUserRecovery;
use TeamNiftyGmbH\Shopware\Requests\UserRecovery\DeleteUserRecovery;
use TeamNiftyGmbH\Shopware\Requests\UserRecovery\GetUserRecovery;
use TeamNiftyGmbH\Shopware\Requests\UserRecovery\GetUserRecoveryList;
use TeamNiftyGmbH\Shopware\Requests\UserRecovery\SearchUserRecovery;
use TeamNiftyGmbH\Shopware\Requests\UserRecovery\UpdateUserRecovery;

class UserRecovery extends BaseResource
{
    public function aggregateUserRecovery(array $data = []): Response
    {
        return $this->connector->send(new AggregateUserRecovery($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createUserRecovery(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateUserRecovery($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the user_recovery
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteUserRecovery(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteUserRecovery($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the user_recovery
     */
    public function getUserRecovery(string $id): Response
    {
        return $this->connector->send(new GetUserRecovery($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getUserRecoveryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetUserRecoveryList($limit, $page, $swQuery));
    }

    public function searchUserRecovery(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchUserRecovery($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the user_recovery
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateUserRecovery(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateUserRecovery($id, $data, $response));
    }
}
