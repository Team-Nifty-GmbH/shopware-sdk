<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductMedia\AggregateProductMedia;
use TeamNiftyGmbH\Shopware\Requests\ProductMedia\CreateProductMedia;
use TeamNiftyGmbH\Shopware\Requests\ProductMedia\DeleteProductMedia;
use TeamNiftyGmbH\Shopware\Requests\ProductMedia\GetProductMedia;
use TeamNiftyGmbH\Shopware\Requests\ProductMedia\GetProductMediaList;
use TeamNiftyGmbH\Shopware\Requests\ProductMedia\SearchProductMedia;
use TeamNiftyGmbH\Shopware\Requests\ProductMedia\UpdateProductMedia;

class ProductMedia extends BaseResource
{
    public function aggregateProductMedia(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductMedia($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductMedia(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductMedia($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_media
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductMedia(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductMedia($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_media
     */
    public function getProductMedia(string $id): Response
    {
        return $this->connector->send(new GetProductMedia($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductMediaList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductMediaList($limit, $page, $swQuery));
    }

    public function searchProductMedia(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductMedia($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_media
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductMedia(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductMedia($id, $data, $response));
    }
}
