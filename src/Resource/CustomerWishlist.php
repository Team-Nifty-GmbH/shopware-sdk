<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlist\AggregateCustomerWishlist;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlist\CreateCustomerWishlist;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlist\DeleteCustomerWishlist;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlist\GetCustomerWishlist;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlist\GetCustomerWishlistList;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlist\SearchCustomerWishlist;
use TeamNiftyGmbH\Shopware\Requests\CustomerWishlist\UpdateCustomerWishlist;

class CustomerWishlist extends BaseResource
{
	public function aggregateCustomerWishlist(array $data = []): Response
	{
		return $this->connector->send(new AggregateCustomerWishlist($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCustomerWishlist(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCustomerWishlist($data, $response));
	}


	/**
	 * @param string $id Identifier for the customer_wishlist
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCustomerWishlist(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCustomerWishlist($id, $response));
	}


	/**
	 * @param string $id Identifier for the customer_wishlist
	 */
	public function getCustomerWishlist(string $id): Response
	{
		return $this->connector->send(new GetCustomerWishlist($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCustomerWishlistList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCustomerWishlistList($limit, $page, $swQuery));
	}


	public function searchCustomerWishlist(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCustomerWishlist($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the customer_wishlist
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCustomerWishlist(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCustomerWishlist($id, $data, $response));
	}
}
