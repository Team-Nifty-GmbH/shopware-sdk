<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField\AggregateProductSearchConfigField;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField\CreateProductSearchConfigField;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField\DeleteProductSearchConfigField;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField\GetProductSearchConfigField;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField\GetProductSearchConfigFieldList;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField\SearchProductSearchConfigField;
use TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField\UpdateProductSearchConfigField;

class ProductSearchConfigField extends BaseResource
{
    public function aggregateProductSearchConfigField(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductSearchConfigField($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductSearchConfigField(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductSearchConfigField($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_search_config_field
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductSearchConfigField(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductSearchConfigField($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_search_config_field
     */
    public function getProductSearchConfigField(string $id): Response
    {
        return $this->connector->send(new GetProductSearchConfigField($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductSearchConfigFieldList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductSearchConfigFieldList($limit, $page, $swQuery));
    }

    public function searchProductSearchConfigField(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductSearchConfigField($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_search_config_field
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductSearchConfigField(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductSearchConfigField($id, $data, $response));
    }
}
