<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Product\AggregateProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\CreateProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\DeleteProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\GetProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\GetProductList;
use TeamNiftyGmbH\Shopware\Requests\Product\SearchProduct;
use TeamNiftyGmbH\Shopware\Requests\Product\UpdateProduct;

class Product extends BaseResource
{
    public function aggregateProduct(array $data = []): Response
    {
        return $this->connector->send(new AggregateProduct($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProduct(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProduct($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProduct(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProduct($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product
     */
    public function getProduct(string $id): Response
    {
        return $this->connector->send(new GetProduct($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductList($limit, $page, $swQuery));
    }

    public function searchProduct(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProduct($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProduct(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProduct($id, $data, $response));
    }
}
