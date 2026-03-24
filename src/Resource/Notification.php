<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Notification\AggregateNotification;
use TeamNiftyGmbH\Shopware\Requests\Notification\CreateNotification;
use TeamNiftyGmbH\Shopware\Requests\Notification\DeleteNotification;
use TeamNiftyGmbH\Shopware\Requests\Notification\GetNotification;
use TeamNiftyGmbH\Shopware\Requests\Notification\GetNotificationList;
use TeamNiftyGmbH\Shopware\Requests\Notification\SearchNotification;
use TeamNiftyGmbH\Shopware\Requests\Notification\UpdateNotification;

class Notification extends BaseResource
{
	public function aggregateNotification(array $data = []): Response
	{
		return $this->connector->send(new AggregateNotification($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createNotification(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateNotification($data, $response));
	}


	/**
	 * @param string $id Identifier for the notification
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteNotification(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteNotification($id, $response));
	}


	/**
	 * @param string $id Identifier for the notification
	 */
	public function getNotification(string $id): Response
	{
		return $this->connector->send(new GetNotification($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getNotificationList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetNotificationList($limit, $page, $swQuery));
	}


	public function searchNotification(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchNotification($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the notification
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateNotification(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateNotification($id, $data, $response));
	}
}
