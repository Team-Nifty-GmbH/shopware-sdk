<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Theme\AggregateTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\AssignTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\CreateTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\DeleteTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\GetTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\GetThemeConfiguration;
use TeamNiftyGmbH\Shopware\Requests\Theme\GetThemeConfigurationStructuredFields;
use TeamNiftyGmbH\Shopware\Requests\Theme\GetThemeList;
use TeamNiftyGmbH\Shopware\Requests\Theme\ResetTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\SearchTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\UpdateTheme;
use TeamNiftyGmbH\Shopware\Requests\Theme\UpdateThemeConfiguration;

class Theme extends BaseResource
{
	public function aggregateTheme(array $data = []): Response
	{
		return $this->connector->send(new AggregateTheme($data));
	}


	/**
	 * @param string $themeId * @param string $salesChannelId
	 */
	public function assignTheme(string $themeId, string $salesChannelId, array $data = []): Response
	{
		return $this->connector->send(new AssignTheme($themeId, $salesChannelId, $data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createTheme(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateTheme($data, $response));
	}


	/**
	 * @param string $id Identifier for the theme
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteTheme(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteTheme($id, $response));
	}


	/**
	 * @param string $id Identifier for the theme
	 */
	public function getTheme(string $id): Response
	{
		return $this->connector->send(new GetTheme($id));
	}


	/**
	 * @param string $themeId 
	 */
	public function getThemeConfiguration(string $themeId): Response
	{
		return $this->connector->send(new GetThemeConfiguration($themeId));
	}


	/**
	 * @param string $themeId 
	 */
	public function getThemeConfigurationStructuredFields(string $themeId): Response
	{
		return $this->connector->send(new GetThemeConfigurationStructuredFields($themeId));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getThemeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetThemeList($limit, $page, $swQuery));
	}


	/**
	 * @param string $themeId 
	 */
	public function resetTheme(string $themeId, array $data = []): Response
	{
		return $this->connector->send(new ResetTheme($themeId, $data));
	}


	public function searchTheme(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchTheme($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the theme
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateTheme(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateTheme($id, $data, $response));
	}


	/**
	 * @param string $themeId The ID of the theme to update
	 * @param null|string $parentThemeId The ID of the parent theme to inherit the configuration from.
	 * @param null|bool $reset If true, the theme configuration will be reset to the default values from the theme.json file.
	 * @param null|bool $validate If true, the theme configuration will be validated before being updated.
	 * @param null|bool $sanitize If true, the theme configuration will be sanitized during validation. before being updated. Only applies if validate is true.
	 */
	public function updateThemeConfiguration(string $themeId, array $data, ?string $parentThemeId = null, ?bool $reset = null, ?bool $validate = null, ?bool $sanitize = null): Response
	{
		return $this->connector->send(new UpdateThemeConfiguration($themeId, $data, $parentThemeId, $reset, $validate, $sanitize));
	}
}
