<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ImportExportFile\AggregateImportExportFile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportFile\CreateImportExportFile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportFile\DeleteImportExportFile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportFile\GetImportExportFile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportFile\GetImportExportFileList;
use TeamNiftyGmbH\Shopware\Requests\ImportExportFile\SearchImportExportFile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportFile\UpdateImportExportFile;

class ImportExportFile extends BaseResource
{
	public function aggregateImportExportFile(array $data = []): Response
	{
		return $this->connector->send(new AggregateImportExportFile($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createImportExportFile(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateImportExportFile($data, $response));
	}


	/**
	 * @param string $id Identifier for the import_export_file
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteImportExportFile(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteImportExportFile($id, $response));
	}


	/**
	 * @param string $id Identifier for the import_export_file
	 */
	public function getImportExportFile(string $id): Response
	{
		return $this->connector->send(new GetImportExportFile($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getImportExportFileList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetImportExportFileList($limit, $page, $swQuery));
	}


	public function searchImportExportFile(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchImportExportFile($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the import_export_file
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateImportExportFile(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateImportExportFile($id, $data, $response));
	}
}
