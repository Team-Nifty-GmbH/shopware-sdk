<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Integration\AggregateIntegration;
use TeamNiftyGmbH\Shopware\Requests\Integration\CreateIntegration;
use TeamNiftyGmbH\Shopware\Requests\Integration\DeleteIntegration;
use TeamNiftyGmbH\Shopware\Requests\Integration\GetIntegration;
use TeamNiftyGmbH\Shopware\Requests\Integration\GetIntegrationList;
use TeamNiftyGmbH\Shopware\Requests\Integration\SearchIntegration;
use TeamNiftyGmbH\Shopware\Requests\Integration\UpdateIntegration;

class Integration extends BaseResource
{
    public function aggregateIntegration(array $data = []): Response
    {
        return $this->connector->send(new AggregateIntegration($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createIntegration(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateIntegration($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the integration
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteIntegration(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteIntegration($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the integration
     */
    public function getIntegration(string $id): Response
    {
        return $this->connector->send(new GetIntegration($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getIntegrationList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetIntegrationList($limit, $page, $swQuery));
    }

    public function searchIntegration(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchIntegration($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the integration
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateIntegration(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateIntegration($id, $data, $response));
    }
}
