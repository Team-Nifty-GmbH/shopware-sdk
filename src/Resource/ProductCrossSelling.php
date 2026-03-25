<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling\AggregateProductCrossSelling;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling\CreateProductCrossSelling;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling\DeleteProductCrossSelling;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling\GetProductCrossSelling;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling\GetProductCrossSellingList;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling\SearchProductCrossSelling;
use TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling\UpdateProductCrossSelling;

class ProductCrossSelling extends BaseResource
{
    public function aggregateProductCrossSelling(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductCrossSelling($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductCrossSelling(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductCrossSelling($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_cross_selling
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductCrossSelling(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductCrossSelling($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_cross_selling
     */
    public function getProductCrossSelling(string $id): Response
    {
        return $this->connector->send(new GetProductCrossSelling($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductCrossSellingList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductCrossSellingList($limit, $page, $swQuery));
    }

    public function searchProductCrossSelling(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductCrossSelling($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_cross_selling
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductCrossSelling(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductCrossSelling($id, $data, $response));
    }
}
