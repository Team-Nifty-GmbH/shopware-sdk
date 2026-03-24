<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\AggregateSystemConfig;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\BatchSaveConfiguration;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\CheckConfiguration;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\CreateSystemConfig;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\DeleteSystemConfig;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\GetConfiguration;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\GetConfigurationValues;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\GetSystemConfig;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\GetSystemConfigList;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\SaveConfiguration;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\SearchSystemConfig;
use TeamNiftyGmbH\Shopware\Requests\SystemConfig\UpdateSystemConfig;

class SystemConfig extends BaseResource
{
	public function aggregateSystemConfig(array $data = []): Response
	{
		return $this->connector->send(new AggregateSystemConfig($data));
	}


	/**
	 * @param null|bool $silent If true, the HTTP cache will not be invalidated. Use this for internal configuration values that do not affect the storefront.
	 */
	public function batchSaveConfiguration(array $data = [], ?bool $silent = null): Response
	{
		return $this->connector->send(new BatchSaveConfiguration($data, $silent));
	}


	/**
	 * @param string $domain The configuration domain to check.
	 */
	public function checkConfiguration(string $domain): Response
	{
		return $this->connector->send(new CheckConfiguration($domain));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createSystemConfig(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateSystemConfig($data, $response));
	}


	/**
	 * @param string $id Identifier for the system_config
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteSystemConfig(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteSystemConfig($id, $response));
	}


	/**
	 * @param string $domain The configuration domain.
	 */
	public function getConfiguration(string $domain): Response
	{
		return $this->connector->send(new GetConfiguration($domain));
	}


	/**
	 * @param string $domain The configuration domain.
	 * @param null|string $salesChannelId The sales channel ID to scope the configuration to.
	 * @param null|bool $inherit Whether to include inherited (global) values.
	 */
	public function getConfigurationValues(string $domain, ?string $salesChannelId = null, ?bool $inherit = null): Response
	{
		return $this->connector->send(new GetConfigurationValues($domain, $salesChannelId, $inherit));
	}


	/**
	 * @param string $id Identifier for the system_config
	 */
	public function getSystemConfig(string $id): Response
	{
		return $this->connector->send(new GetSystemConfig($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getSystemConfigList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetSystemConfigList($limit, $page, $swQuery));
	}


	/**
	 * @param null|string $salesChannelId The sales channel ID to scope the configuration to.
	 * @param null|bool $silent If true, the HTTP cache will not be invalidated. Use this for internal configuration values that do not affect the storefront.
	 */
	public function saveConfiguration(array $data = [], ?string $salesChannelId = null, ?bool $silent = null): Response
	{
		return $this->connector->send(new SaveConfiguration($data, $salesChannelId, $silent));
	}


	public function searchSystemConfig(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchSystemConfig($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the system_config
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateSystemConfig(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateSystemConfig($id, $data, $response));
	}
}
