<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomField\AggregateCustomField;
use TeamNiftyGmbH\Shopware\Requests\CustomField\CreateCustomField;
use TeamNiftyGmbH\Shopware\Requests\CustomField\DeleteCustomField;
use TeamNiftyGmbH\Shopware\Requests\CustomField\GetCustomField;
use TeamNiftyGmbH\Shopware\Requests\CustomField\GetCustomFieldList;
use TeamNiftyGmbH\Shopware\Requests\CustomField\SearchCustomField;
use TeamNiftyGmbH\Shopware\Requests\CustomField\UpdateCustomField;

class CustomField extends BaseResource
{
	public function aggregateCustomField(array $data = []): Response
	{
		return $this->connector->send(new AggregateCustomField($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCustomField(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCustomField($data, $response));
	}


	/**
	 * @param string $id Identifier for the custom_field
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCustomField(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCustomField($id, $response));
	}


	/**
	 * @param string $id Identifier for the custom_field
	 */
	public function getCustomField(string $id): Response
	{
		return $this->connector->send(new GetCustomField($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCustomFieldList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCustomFieldList($limit, $page, $swQuery));
	}


	public function searchCustomField(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCustomField($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the custom_field
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCustomField(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCustomField($id, $data, $response));
	}
}
