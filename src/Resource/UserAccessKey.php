<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\UserAccessKey\AggregateUserAccessKey;
use TeamNiftyGmbH\Shopware\Requests\UserAccessKey\CreateUserAccessKey;
use TeamNiftyGmbH\Shopware\Requests\UserAccessKey\DeleteUserAccessKey;
use TeamNiftyGmbH\Shopware\Requests\UserAccessKey\GetUserAccessKey;
use TeamNiftyGmbH\Shopware\Requests\UserAccessKey\GetUserAccessKeyList;
use TeamNiftyGmbH\Shopware\Requests\UserAccessKey\SearchUserAccessKey;
use TeamNiftyGmbH\Shopware\Requests\UserAccessKey\UpdateUserAccessKey;

class UserAccessKey extends BaseResource
{
	public function aggregateUserAccessKey(array $data = []): Response
	{
		return $this->connector->send(new AggregateUserAccessKey($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createUserAccessKey(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateUserAccessKey($data, $response));
	}


	/**
	 * @param string $id Identifier for the user_access_key
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteUserAccessKey(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteUserAccessKey($id, $response));
	}


	/**
	 * @param string $id Identifier for the user_access_key
	 */
	public function getUserAccessKey(string $id): Response
	{
		return $this->connector->send(new GetUserAccessKey($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getUserAccessKeyList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetUserAccessKeyList($limit, $page, $swQuery));
	}


	public function searchUserAccessKey(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchUserAccessKey($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the user_access_key
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateUserAccessKey(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateUserAccessKey($id, $data, $response));
	}
}
