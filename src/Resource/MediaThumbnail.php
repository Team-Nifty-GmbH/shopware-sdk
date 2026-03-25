<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnail\AggregateMediaThumbnail;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnail\CreateMediaThumbnail;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnail\DeleteMediaThumbnail;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnail\GetMediaThumbnail;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnail\GetMediaThumbnailList;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnail\SearchMediaThumbnail;
use TeamNiftyGmbH\Shopware\Requests\MediaThumbnail\UpdateMediaThumbnail;

class MediaThumbnail extends BaseResource
{
    public function aggregateMediaThumbnail(array $data = []): Response
    {
        return $this->connector->send(new AggregateMediaThumbnail($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createMediaThumbnail(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateMediaThumbnail($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the media_thumbnail
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteMediaThumbnail(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteMediaThumbnail($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the media_thumbnail
     */
    public function getMediaThumbnail(string $id): Response
    {
        return $this->connector->send(new GetMediaThumbnail($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getMediaThumbnailList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetMediaThumbnailList($limit, $page, $swQuery));
    }

    public function searchMediaThumbnail(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchMediaThumbnail($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the media_thumbnail
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateMediaThumbnail(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateMediaThumbnail($id, $data, $response));
    }
}
