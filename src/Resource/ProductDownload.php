<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductDownload\AggregateProductDownload;
use TeamNiftyGmbH\Shopware\Requests\ProductDownload\CreateProductDownload;
use TeamNiftyGmbH\Shopware\Requests\ProductDownload\DeleteProductDownload;
use TeamNiftyGmbH\Shopware\Requests\ProductDownload\GetProductDownload;
use TeamNiftyGmbH\Shopware\Requests\ProductDownload\GetProductDownloadList;
use TeamNiftyGmbH\Shopware\Requests\ProductDownload\SearchProductDownload;
use TeamNiftyGmbH\Shopware\Requests\ProductDownload\UpdateProductDownload;

class ProductDownload extends BaseResource
{
    public function aggregateProductDownload(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductDownload($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductDownload(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductDownload($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_download
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductDownload(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductDownload($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_download
     */
    public function getProductDownload(string $id): Response
    {
        return $this->connector->send(new GetProductDownload($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductDownloadList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductDownloadList($limit, $page, $swQuery));
    }

    public function searchProductDownload(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductDownload($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_download
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductDownload(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductDownload($id, $data, $response));
    }
}
