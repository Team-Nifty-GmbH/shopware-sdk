<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ImportExportProfile\AggregateImportExportProfile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportProfile\CreateImportExportProfile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportProfile\DeleteImportExportProfile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportProfile\GetImportExportProfile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportProfile\GetImportExportProfileList;
use TeamNiftyGmbH\Shopware\Requests\ImportExportProfile\SearchImportExportProfile;
use TeamNiftyGmbH\Shopware\Requests\ImportExportProfile\UpdateImportExportProfile;

class ImportExportProfile extends BaseResource
{
	public function aggregateImportExportProfile(array $data = []): Response
	{
		return $this->connector->send(new AggregateImportExportProfile($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createImportExportProfile(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateImportExportProfile($data, $response));
	}


	/**
	 * @param string $id Identifier for the import_export_profile
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteImportExportProfile(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteImportExportProfile($id, $response));
	}


	/**
	 * @param string $id Identifier for the import_export_profile
	 */
	public function getImportExportProfile(string $id): Response
	{
		return $this->connector->send(new GetImportExportProfile($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getImportExportProfileList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetImportExportProfileList($limit, $page, $swQuery));
	}


	public function searchImportExportProfile(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchImportExportProfile($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the import_export_profile
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateImportExportProfile(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateImportExportProfile($id, $data, $response));
	}
}
