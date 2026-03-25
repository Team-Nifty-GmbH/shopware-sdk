<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CmsSlot\AggregateCmsSlot;
use TeamNiftyGmbH\Shopware\Requests\CmsSlot\CreateCmsSlot;
use TeamNiftyGmbH\Shopware\Requests\CmsSlot\DeleteCmsSlot;
use TeamNiftyGmbH\Shopware\Requests\CmsSlot\GetCmsSlot;
use TeamNiftyGmbH\Shopware\Requests\CmsSlot\GetCmsSlotList;
use TeamNiftyGmbH\Shopware\Requests\CmsSlot\SearchCmsSlot;
use TeamNiftyGmbH\Shopware\Requests\CmsSlot\UpdateCmsSlot;

class CmsSlot extends BaseResource
{
    public function aggregateCmsSlot(array $data = []): Response
    {
        return $this->connector->send(new AggregateCmsSlot($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createCmsSlot(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateCmsSlot($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the cms_slot
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteCmsSlot(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteCmsSlot($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the cms_slot
     */
    public function getCmsSlot(string $id): Response
    {
        return $this->connector->send(new GetCmsSlot($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getCmsSlotList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetCmsSlotList($limit, $page, $swQuery));
    }

    public function searchCmsSlot(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchCmsSlot($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the cms_slot
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateCmsSlot(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateCmsSlot($id, $data, $response));
    }
}
