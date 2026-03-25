<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\User\AggregateUser;
use TeamNiftyGmbH\Shopware\Requests\User\CreateUser;
use TeamNiftyGmbH\Shopware\Requests\User\DeleteUser;
use TeamNiftyGmbH\Shopware\Requests\User\GetUser;
use TeamNiftyGmbH\Shopware\Requests\User\GetUserList;
use TeamNiftyGmbH\Shopware\Requests\User\SearchUser;
use TeamNiftyGmbH\Shopware\Requests\User\UpdateUser;

class User extends BaseResource
{
    public function aggregateUser(array $data = []): Response
    {
        return $this->connector->send(new AggregateUser($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createUser(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateUser($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the user
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteUser(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteUser($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the user
     */
    public function getUser(string $id): Response
    {
        return $this->connector->send(new GetUser($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getUserList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetUserList($limit, $page, $swQuery));
    }

    public function searchUser(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchUser($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the user
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateUser(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateUser($id, $data, $response));
    }
}
