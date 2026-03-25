<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductReview\AggregateProductReview;
use TeamNiftyGmbH\Shopware\Requests\ProductReview\CreateProductReview;
use TeamNiftyGmbH\Shopware\Requests\ProductReview\DeleteProductReview;
use TeamNiftyGmbH\Shopware\Requests\ProductReview\GetProductReview;
use TeamNiftyGmbH\Shopware\Requests\ProductReview\GetProductReviewList;
use TeamNiftyGmbH\Shopware\Requests\ProductReview\SearchProductReview;
use TeamNiftyGmbH\Shopware\Requests\ProductReview\UpdateProductReview;

class ProductReview extends BaseResource
{
    public function aggregateProductReview(array $data = []): Response
    {
        return $this->connector->send(new AggregateProductReview($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createProductReview(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateProductReview($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_review
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteProductReview(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteProductReview($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the product_review
     */
    public function getProductReview(string $id): Response
    {
        return $this->connector->send(new GetProductReview($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getProductReviewList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetProductReviewList($limit, $page, $swQuery));
    }

    public function searchProductReview(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchProductReview($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the product_review
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateProductReview(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateProductReview($id, $data, $response));
    }
}
