<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\WebhookEventLog\AggregateWebhookEventLog;
use TeamNiftyGmbH\Shopware\Requests\WebhookEventLog\CreateWebhookEventLog;
use TeamNiftyGmbH\Shopware\Requests\WebhookEventLog\DeleteWebhookEventLog;
use TeamNiftyGmbH\Shopware\Requests\WebhookEventLog\GetWebhookEventLog;
use TeamNiftyGmbH\Shopware\Requests\WebhookEventLog\GetWebhookEventLogList;
use TeamNiftyGmbH\Shopware\Requests\WebhookEventLog\SearchWebhookEventLog;
use TeamNiftyGmbH\Shopware\Requests\WebhookEventLog\UpdateWebhookEventLog;

class WebhookEventLog extends BaseResource
{
	public function aggregateWebhookEventLog(array $data = []): Response
	{
		return $this->connector->send(new AggregateWebhookEventLog($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createWebhookEventLog(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateWebhookEventLog($data, $response));
	}


	/**
	 * @param string $id Identifier for the webhook_event_log
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteWebhookEventLog(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteWebhookEventLog($id, $response));
	}


	/**
	 * @param string $id Identifier for the webhook_event_log
	 */
	public function getWebhookEventLog(string $id): Response
	{
		return $this->connector->send(new GetWebhookEventLog($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getWebhookEventLogList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetWebhookEventLogList($limit, $page, $swQuery));
	}


	public function searchWebhookEventLog(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchWebhookEventLog($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the webhook_event_log
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateWebhookEventLog(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateWebhookEventLog($id, $data, $response));
	}
}
