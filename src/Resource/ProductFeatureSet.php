<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet\AggregateProductFeatureSet;
use TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet\CreateProductFeatureSet;
use TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet\DeleteProductFeatureSet;
use TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet\GetProductFeatureSet;
use TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet\GetProductFeatureSetList;
use TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet\SearchProductFeatureSet;
use TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet\UpdateProductFeatureSet;

class ProductFeatureSet extends BaseResource
{
    public function aggregateProductFeatureSet(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductFeatureSet($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductFeatureSet(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductFeatureSet($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_feature_set
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductFeatureSet(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductFeatureSet($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_feature_set
     */
    public function getProductFeatureSet(string $id): Response
    {
        return $this->connector->send(new GetProductFeatureSet($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductFeatureSetList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductFeatureSetList($limit, $page, $swQuery));
    }

    public function searchProductFeatureSet(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductFeatureSet($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_feature_set
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductFeatureSet(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductFeatureSet($id, $data, $response));
    }
}
