<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting\AggregateProductConfiguratorSetting;
use TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting\CreateProductConfiguratorSetting;
use TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting\DeleteProductConfiguratorSetting;
use TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting\GetProductConfiguratorSetting;
use TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting\GetProductConfiguratorSettingList;
use TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting\SearchProductConfiguratorSetting;
use TeamNiftyGmbH\Shopware\Requests\ProductConfiguratorSetting\UpdateProductConfiguratorSetting;

class ProductConfiguratorSetting extends BaseResource
{
	public function aggregateProductConfiguratorSetting(array $data = []): Response
	{
		return $this->connector->send(new AggregateProductConfiguratorSetting($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createProductConfiguratorSetting(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateProductConfiguratorSetting($data, $response));
	}


	/**
	 * @param string $id Identifier for the product_configurator_setting
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteProductConfiguratorSetting(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteProductConfiguratorSetting($id, $response));
	}


	/**
	 * @param string $id Identifier for the product_configurator_setting
	 */
	public function getProductConfiguratorSetting(string $id): Response
	{
		return $this->connector->send(new GetProductConfiguratorSetting($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getProductConfiguratorSettingList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetProductConfiguratorSettingList($limit, $page, $swQuery));
	}


	public function searchProductConfiguratorSetting(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchProductConfiguratorSetting($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the product_configurator_setting
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateProductConfiguratorSetting(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateProductConfiguratorSetting($id, $data, $response));
	}
}
