<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppTemplate\AggregateAppTemplate;
use TeamNiftyGmbH\Shopware\Requests\AppTemplate\CreateAppTemplate;
use TeamNiftyGmbH\Shopware\Requests\AppTemplate\DeleteAppTemplate;
use TeamNiftyGmbH\Shopware\Requests\AppTemplate\GetAppTemplate;
use TeamNiftyGmbH\Shopware\Requests\AppTemplate\GetAppTemplateList;
use TeamNiftyGmbH\Shopware\Requests\AppTemplate\SearchAppTemplate;
use TeamNiftyGmbH\Shopware\Requests\AppTemplate\UpdateAppTemplate;

class AppTemplate extends BaseResource
{
    public function aggregateAppTemplate(array $data = []): Response
    {
        return $this->connector->send(new AggregateAppTemplate($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createAppTemplate(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateAppTemplate($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_template
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteAppTemplate(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteAppTemplate($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_template
     */
    public function getAppTemplate(string $id): Response
    {
        return $this->connector->send(new GetAppTemplate($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getAppTemplateList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetAppTemplateList($limit, $page, $swQuery));
    }

    public function searchAppTemplate(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchAppTemplate($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the app_template
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateAppTemplate(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateAppTemplate($id, $data, $response));
    }
}
