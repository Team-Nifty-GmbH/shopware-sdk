<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AclRole\AggregateAclRole;
use TeamNiftyGmbH\Shopware\Requests\AclRole\CreateAclRole;
use TeamNiftyGmbH\Shopware\Requests\AclRole\DeleteAclRole;
use TeamNiftyGmbH\Shopware\Requests\AclRole\GetAclRole;
use TeamNiftyGmbH\Shopware\Requests\AclRole\GetAclRoleList;
use TeamNiftyGmbH\Shopware\Requests\AclRole\SearchAclRole;
use TeamNiftyGmbH\Shopware\Requests\AclRole\UpdateAclRole;

class AclRole extends BaseResource
{
	public function aggregateAclRole(array $data = []): Response
	{
		return $this->connector->send(new AggregateAclRole($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createAclRole(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateAclRole($data, $response));
	}


	/**
	 * @param string $id Identifier for the acl_role
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteAclRole(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteAclRole($id, $response));
	}


	/**
	 * @param string $id Identifier for the acl_role
	 */
	public function getAclRole(string $id): Response
	{
		return $this->connector->send(new GetAclRole($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getAclRoleList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetAclRoleList($limit, $page, $swQuery));
	}


	public function searchAclRole(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchAclRole($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the acl_role
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateAclRole(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateAclRole($id, $data, $response));
	}
}
