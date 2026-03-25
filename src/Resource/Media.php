<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Media\AggregateMedia;
use TeamNiftyGmbH\Shopware\Requests\Media\CreateMedia;
use TeamNiftyGmbH\Shopware\Requests\Media\DeleteMedia;
use TeamNiftyGmbH\Shopware\Requests\Media\GetMedia;
use TeamNiftyGmbH\Shopware\Requests\Media\GetMediaList;
use TeamNiftyGmbH\Shopware\Requests\Media\SearchMedia;
use TeamNiftyGmbH\Shopware\Requests\Media\UpdateMedia;

class Media extends BaseResource
{
    public function aggregateMedia(array $data = []): Response
    {
        return $this->connector->send(new AggregateMedia($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createMedia(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateMedia($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the media
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteMedia(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteMedia($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the media
     */
    public function getMedia(string $id): Response
    {
        return $this->connector->send(new GetMedia($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getMediaList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetMediaList($limit, $page, $swQuery));
    }

    public function searchMedia(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchMedia($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the media
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateMedia(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateMedia($id, $data, $response));
    }
}
