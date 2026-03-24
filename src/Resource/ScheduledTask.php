<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ScheduledTask\AggregateScheduledTask;
use TeamNiftyGmbH\Shopware\Requests\ScheduledTask\CreateScheduledTask;
use TeamNiftyGmbH\Shopware\Requests\ScheduledTask\DeleteScheduledTask;
use TeamNiftyGmbH\Shopware\Requests\ScheduledTask\GetScheduledTask;
use TeamNiftyGmbH\Shopware\Requests\ScheduledTask\GetScheduledTaskList;
use TeamNiftyGmbH\Shopware\Requests\ScheduledTask\SearchScheduledTask;
use TeamNiftyGmbH\Shopware\Requests\ScheduledTask\UpdateScheduledTask;

class ScheduledTask extends BaseResource
{
	public function aggregateScheduledTask(array $data = []): Response
	{
		return $this->connector->send(new AggregateScheduledTask($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createScheduledTask(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateScheduledTask($data, $response));
	}


	/**
	 * @param string $id Identifier for the scheduled_task
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteScheduledTask(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteScheduledTask($id, $response));
	}


	/**
	 * @param string $id Identifier for the scheduled_task
	 */
	public function getScheduledTask(string $id): Response
	{
		return $this->connector->send(new GetScheduledTask($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getScheduledTaskList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetScheduledTaskList($limit, $page, $swQuery));
	}


	public function searchScheduledTask(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchScheduledTask($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the scheduled_task
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateScheduledTask(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateScheduledTask($id, $data, $response));
	}
}
