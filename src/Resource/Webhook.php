<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Webhook\AggregateWebhook;
use TeamNiftyGmbH\Shopware\Requests\Webhook\CreateWebhook;
use TeamNiftyGmbH\Shopware\Requests\Webhook\DeleteWebhook;
use TeamNiftyGmbH\Shopware\Requests\Webhook\GetWebhook;
use TeamNiftyGmbH\Shopware\Requests\Webhook\GetWebhookList;
use TeamNiftyGmbH\Shopware\Requests\Webhook\SearchWebhook;
use TeamNiftyGmbH\Shopware\Requests\Webhook\UpdateWebhook;

class Webhook extends BaseResource
{
    public function aggregateWebhook(array $data = []): Response
    {
        return $this->connector->send(new AggregateWebhook($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createWebhook(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateWebhook($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the webhook
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteWebhook(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteWebhook($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the webhook
     */
    public function getWebhook(string $id): Response
    {
        return $this->connector->send(new GetWebhook($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getWebhookList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetWebhookList($limit, $page, $swQuery));
    }

    public function searchWebhook(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchWebhook($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the webhook
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateWebhook(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateWebhook($id, $data, $response));
    }
}
