<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig\AggregateProductSearchConfig;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig\CreateProductSearchConfig;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig\DeleteProductSearchConfig;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig\GetProductSearchConfig;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig\GetProductSearchConfigList;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig\SearchProductSearchConfig;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig\UpdateProductSearchConfig;

class ProductSearchConfig extends BaseResource
{
    public function aggregateProductSearchConfig(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductSearchConfig($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductSearchConfig(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductSearchConfig($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_search_config
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductSearchConfig(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductSearchConfig($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_search_config
     */
    public function getProductSearchConfig(string $id): Response
    {
        return $this->connector->send(new GetProductSearchConfig($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductSearchConfigList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductSearchConfigList($limit, $page, $swQuery));
    }

    public function searchProductSearchConfig(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductSearchConfig($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_search_config
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductSearchConfig(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductSearchConfig($id, $data, $response));
    }
}
