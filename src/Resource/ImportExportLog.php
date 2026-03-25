<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ImportExportLog\AggregateImportExportLog;
use TeamNiftyGmbH\Shopware\Requests\ImportExportLog\CreateImportExportLog;
use TeamNiftyGmbH\Shopware\Requests\ImportExportLog\DeleteImportExportLog;
use TeamNiftyGmbH\Shopware\Requests\ImportExportLog\GetImportExportLog;
use TeamNiftyGmbH\Shopware\Requests\ImportExportLog\GetImportExportLogList;
use TeamNiftyGmbH\Shopware\Requests\ImportExportLog\SearchImportExportLog;
use TeamNiftyGmbH\Shopware\Requests\ImportExportLog\UpdateImportExportLog;

class ImportExportLog extends BaseResource
{
    public function aggregateImportExportLog(array $data = []): Response
    {
        return $this->connector->send(new AggregateImportExportLog($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createImportExportLog(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateImportExportLog($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the import_export_log
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteImportExportLog(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteImportExportLog($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the import_export_log
     */
    public function getImportExportLog(string $id): Response
    {
        return $this->connector->send(new GetImportExportLog($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getImportExportLogList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetImportExportLogList($limit, $page, $swQuery));
    }

    public function searchImportExportLog(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchImportExportLog($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the import_export_log
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateImportExportLog(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateImportExportLog($id, $data, $response));
    }
}
