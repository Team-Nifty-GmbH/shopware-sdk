<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig\AggregateDocumentBaseConfig;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig\CreateDocumentBaseConfig;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig\DeleteDocumentBaseConfig;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig\GetDocumentBaseConfig;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig\GetDocumentBaseConfigList;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig\SearchDocumentBaseConfig;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig\UpdateDocumentBaseConfig;

class DocumentBaseConfig extends BaseResource
{
	public function aggregateDocumentBaseConfig(array $data = []): Response
	{
		return $this->connector->send(new AggregateDocumentBaseConfig($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createDocumentBaseConfig(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateDocumentBaseConfig($data, $response));
	}


	/**
	 * @param string $id Identifier for the document_base_config
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteDocumentBaseConfig(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteDocumentBaseConfig($id, $response));
	}


	/**
	 * @param string $id Identifier for the document_base_config
	 */
	public function getDocumentBaseConfig(string $id): Response
	{
		return $this->connector->send(new GetDocumentBaseConfig($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getDocumentBaseConfigList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetDocumentBaseConfigList($limit, $page, $swQuery));
	}


	public function searchDocumentBaseConfig(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchDocumentBaseConfig($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the document_base_config
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateDocumentBaseConfig(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateDocumentBaseConfig($id, $data, $response));
	}
}
