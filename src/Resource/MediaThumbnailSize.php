<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize\AggregateMediaThumbnailSize;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize\CreateMediaThumbnailSize;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize\DeleteMediaThumbnailSize;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize\GetMediaThumbnailSize;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize\GetMediaThumbnailSizeList;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize\SearchMediaThumbnailSize;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnailSize\UpdateMediaThumbnailSize;

class MediaThumbnailSize extends BaseResource
{
    public function aggregateMediaThumbnailSize(array $data = []): Response
    {
        return $this->connector->send(new AggregateMediaThumbnailSize($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createMediaThumbnailSize(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateMediaThumbnailSize($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the media_thumbnail_size
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteMediaThumbnailSize(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteMediaThumbnailSize($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the media_thumbnail_size
     */
    public function getMediaThumbnailSize(string $id): Response
    {
        return $this->connector->send(new GetMediaThumbnailSize($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getMediaThumbnailSizeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetMediaThumbnailSizeList($limit, $page, $swQuery));
    }

    public function searchMediaThumbnailSize(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchMediaThumbnailSize($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the media_thumbnail_size
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateMediaThumbnailSize(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateMediaThumbnailSize($id, $data, $response));
    }
}
