<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductPrice\AggregateProductPrice;
use TeamNiftyGmbH\Shopware\Requests\ProductPrice\CreateProductPrice;
use TeamNiftyGmbH\Shopware\Requests\ProductPrice\DeleteProductPrice;
use TeamNiftyGmbH\Shopware\Requests\ProductPrice\GetProductPrice;
use TeamNiftyGmbH\Shopware\Requests\ProductPrice\GetProductPriceList;
use TeamNiftyGmbH\Shopware\Requests\ProductPrice\SearchProductPrice;
use TeamNiftyGmbH\Shopware\Requests\ProductPrice\UpdateProductPrice;

class ProductPrice extends BaseResource
{
    public function aggregateProductPrice(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductPrice($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductPrice(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductPrice($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_price
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductPrice(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductPrice($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_price
     */
    public function getProductPrice(string $id): Response
    {
        return $this->connector->send(new GetProductPrice($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductPriceList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductPriceList($limit, $page, $swQuery));
    }

    public function searchProductPrice(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductPrice($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_price
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductPrice(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductPrice($id, $data, $response));
    }
}
