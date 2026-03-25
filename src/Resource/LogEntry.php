<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\LogEntry\AggregateLogEntry;
use TeamNiftyGmbH\Shopware\Requests\LogEntry\CreateLogEntry;
use TeamNiftyGmbH\Shopware\Requests\LogEntry\DeleteLogEntry;
use TeamNiftyGmbH\Shopware\Requests\LogEntry\GetLogEntry;
use TeamNiftyGmbH\Shopware\Requests\LogEntry\GetLogEntryList;
use TeamNiftyGmbH\Shopware\Requests\LogEntry\SearchLogEntry;
use TeamNiftyGmbH\Shopware\Requests\LogEntry\UpdateLogEntry;

class LogEntry extends BaseResource
{
    public function aggregateLogEntry(array $data = []): Response
    {
        return $this->connector->send(new AggregateLogEntry($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createLogEntry(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateLogEntry($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the log_entry
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteLogEntry(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteLogEntry($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the log_entry
     */
    public function getLogEntry(string $id): Response
    {
        return $this->connector->send(new GetLogEntry($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getLogEntryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetLogEntryList($limit, $page, $swQuery));
    }

    public function searchLogEntry(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchLogEntry($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the log_entry
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateLogEntry(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateLogEntry($id, $data, $response));
    }
}
