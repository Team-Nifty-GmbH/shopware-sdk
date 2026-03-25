<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration\AggregateMediaFolderConfiguration;
use TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration\CreateMediaFolderConfiguration;
use TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration\DeleteMediaFolderConfiguration;
use TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration\GetMediaFolderConfiguration;
use TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration\GetMediaFolderConfigurationList;
use TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration\SearchMediaFolderConfiguration;
use TeamNiftyGmbH\Shopware\Requests\MediaFolderConfiguration\UpdateMediaFolderConfiguration;

class MediaFolderConfiguration extends BaseResource
{
    public function aggregateMediaFolderConfiguration(array $data = []): Response
    {
        return $this->connector->send(new AggregateMediaFolderConfiguration($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createMediaFolderConfiguration(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateMediaFolderConfiguration($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the media_folder_configuration
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteMediaFolderConfiguration(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteMediaFolderConfiguration($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the media_folder_configuration
     */
    public function getMediaFolderConfiguration(string $id): Response
    {
        return $this->connector->send(new GetMediaFolderConfiguration($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getMediaFolderConfigurationList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetMediaFolderConfigurationList($limit, $page, $swQuery));
    }

    public function searchMediaFolderConfiguration(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchMediaFolderConfiguration($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the media_folder_configuration
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateMediaFolderConfiguration(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateMediaFolderConfiguration($id, $data, $response));
    }
}
