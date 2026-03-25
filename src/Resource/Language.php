<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Language\AggregateLanguage;
use TeamNiftyGmbH\Shopware\Requests\Language\CreateLanguage;
use TeamNiftyGmbH\Shopware\Requests\Language\DeleteLanguage;
use TeamNiftyGmbH\Shopware\Requests\Language\GetLanguage;
use TeamNiftyGmbH\Shopware\Requests\Language\GetLanguageList;
use TeamNiftyGmbH\Shopware\Requests\Language\SearchLanguage;
use TeamNiftyGmbH\Shopware\Requests\Language\UpdateLanguage;

class Language extends BaseResource
{
    public function aggregateLanguage(array $data = []): Response
    {
        return $this->connector->send(new AggregateLanguage($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createLanguage(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateLanguage($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the language
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteLanguage(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteLanguage($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the language
     */
    public function getLanguage(string $id): Response
    {
        return $this->connector->send(new GetLanguage($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getLanguageList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetLanguageList($limit, $page, $swQuery));
    }

    public function searchLanguage(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchLanguage($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the language
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateLanguage(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateLanguage($id, $data, $response));
    }
}
