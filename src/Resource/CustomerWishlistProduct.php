<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct\AggregateCustomerWishlistProduct;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct\CreateCustomerWishlistProduct;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct\DeleteCustomerWishlistProduct;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct\GetCustomerWishlistProduct;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct\GetCustomerWishlistProductList;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct\SearchCustomerWishlistProduct;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct\UpdateCustomerWishlistProduct;

class CustomerWishlistProduct extends BaseResource
{
    public function aggregateCustomerWishlistProduct(array $data = []): Response
    {
        return $this->connector->send(new AggregateCustomerWishlistProduct($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createCustomerWishlistProduct(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateCustomerWishlistProduct($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the customer_wishlist_product
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteCustomerWishlistProduct(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteCustomerWishlistProduct($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the customer_wishlist_product
     */
    public function getCustomerWishlistProduct(string $id): Response
    {
        return $this->connector->send(new GetCustomerWishlistProduct($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getCustomerWishlistProductList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetCustomerWishlistProductList($limit, $page, $swQuery));
    }

    public function searchCustomerWishlistProduct(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchCustomerWishlistProduct($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the customer_wishlist_product
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateCustomerWishlistProduct(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateCustomerWishlistProduct($id, $data, $response));
    }
}
