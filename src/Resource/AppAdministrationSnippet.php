<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet\AggregateAppAdministrationSnippet;
use TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet\CreateAppAdministrationSnippet;
use TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet\DeleteAppAdministrationSnippet;
use TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet\GetAppAdministrationSnippet;
use TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet\GetAppAdministrationSnippetList;
use TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet\SearchAppAdministrationSnippet;
use TeamNiftyGmbH\Shopware\Requests\AppAdministrationSnippet\UpdateAppAdministrationSnippet;

class AppAdministrationSnippet extends BaseResource
{
    public function aggregateAppAdministrationSnippet(array $data = []): Response
    {
        return $this->connector->send(new AggregateAppAdministrationSnippet($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createAppAdministrationSnippet(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateAppAdministrationSnippet($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_administration_snippet
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteAppAdministrationSnippet(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteAppAdministrationSnippet($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the app_administration_snippet
     */
    public function getAppAdministrationSnippet(string $id): Response
    {
        return $this->connector->send(new GetAppAdministrationSnippet($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getAppAdministrationSnippetList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetAppAdministrationSnippetList($limit, $page, $swQuery));
    }

    public function searchAppAdministrationSnippet(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchAppAdministrationSnippet($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the app_administration_snippet
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateAppAdministrationSnippet(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateAppAdministrationSnippet($id, $data, $response));
    }
}
