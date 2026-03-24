<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod\AggregateAppPaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod\CreateAppPaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod\DeleteAppPaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod\GetAppPaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod\GetAppPaymentMethodList;
use TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod\SearchAppPaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\AppPaymentMethod\UpdateAppPaymentMethod;

class AppPaymentMethod extends BaseResource
{
	public function aggregateAppPaymentMethod(array $data = []): Response
	{
		return $this->connector->send(new AggregateAppPaymentMethod($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createAppPaymentMethod(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateAppPaymentMethod($data, $response));
	}


	/**
	 * @param string $id Identifier for the app_payment_method
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteAppPaymentMethod(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteAppPaymentMethod($id, $response));
	}


	/**
	 * @param string $id Identifier for the app_payment_method
	 */
	public function getAppPaymentMethod(string $id): Response
	{
		return $this->connector->send(new GetAppPaymentMethod($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getAppPaymentMethodList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetAppPaymentMethodList($limit, $page, $swQuery));
	}


	public function searchAppPaymentMethod(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchAppPaymentMethod($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the app_payment_method
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateAppPaymentMethod(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateAppPaymentMethod($id, $data, $response));
	}
}
