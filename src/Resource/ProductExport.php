<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductExport\AggregateProductExport;
use TeamNiftyGmbH\Shopware\Requests\ProductExport\CreateProductExport;
use TeamNiftyGmbH\Shopware\Requests\ProductExport\DeleteProductExport;
use TeamNiftyGmbH\Shopware\Requests\ProductExport\GetProductExport;
use TeamNiftyGmbH\Shopware\Requests\ProductExport\GetProductExportList;
use TeamNiftyGmbH\Shopware\Requests\ProductExport\SearchProductExport;
use TeamNiftyGmbH\Shopware\Requests\ProductExport\UpdateProductExport;

class ProductExport extends BaseResource
{
    public function aggregateProductExport(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductExport($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductExport(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductExport($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_export
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductExport(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductExport($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_export
     */
    public function getProductExport(string $id): Response
    {
        return $this->connector->send(new GetProductExport($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductExportList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductExportList($limit, $page, $swQuery));
    }

    public function searchProductExport(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductExport($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_export
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductExport(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductExport($id, $data, $response));
    }
}
