<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\UserConfig\AggregateUserConfig;
use TeamNiftyGmbH\Shopware\Requests\UserConfig\CreateUserConfig;
use TeamNiftyGmbH\Shopware\Requests\UserConfig\DeleteUserConfig;
use TeamNiftyGmbH\Shopware\Requests\UserConfig\GetUserConfig;
use TeamNiftyGmbH\Shopware\Requests\UserConfig\GetUserConfigList;
use TeamNiftyGmbH\Shopware\Requests\UserConfig\SearchUserConfig;
use TeamNiftyGmbH\Shopware\Requests\UserConfig\UpdateUserConfig;

class UserConfig extends BaseResource
{
    public function aggregateUserConfig(array $data = []): Response
    {
        return $this->connector->send(new AggregateUserConfig($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createUserConfig(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateUserConfig($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the user_config
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteUserConfig(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteUserConfig($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the user_config
     */
    public function getUserConfig(string $id): Response
    {
        return $this->connector->send(new GetUserConfig($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getUserConfigList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetUserConfigList($limit, $page, $swQuery));
    }

    public function searchUserConfig(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchUserConfig($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the user_config
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateUserConfig(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateUserConfig($id, $data, $response));
    }
}
