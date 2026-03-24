<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSet\AggregateCustomFieldSet;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSet\CreateCustomFieldSet;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSet\DeleteCustomFieldSet;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSet\GetCustomFieldSet;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSet\GetCustomFieldSetList;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSet\SearchCustomFieldSet;
use TeamNiftyGmbH\Shopware\Requests\CustomFieldSet\UpdateCustomFieldSet;

class CustomFieldSet extends BaseResource
{
	public function aggregateCustomFieldSet(array $data = []): Response
	{
		return $this->connector->send(new AggregateCustomFieldSet($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCustomFieldSet(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCustomFieldSet($data, $response));
	}


	/**
	 * @param string $id Identifier for the custom_field_set
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCustomFieldSet(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCustomFieldSet($id, $response));
	}


	/**
	 * @param string $id Identifier for the custom_field_set
	 */
	public function getCustomFieldSet(string $id): Response
	{
		return $this->connector->send(new GetCustomFieldSet($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCustomFieldSetList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCustomFieldSetList($limit, $page, $swQuery));
	}


	public function searchCustomFieldSet(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCustomFieldSet($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the custom_field_set
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCustomFieldSet(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCustomFieldSet($id, $data, $response));
	}
}
