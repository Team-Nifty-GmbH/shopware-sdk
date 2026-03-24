<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder\AggregateMediaDefaultFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder\CreateMediaDefaultFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder\DeleteMediaDefaultFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder\GetMediaDefaultFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder\GetMediaDefaultFolderList;
use TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder\SearchMediaDefaultFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaDefaultFolder\UpdateMediaDefaultFolder;

class MediaDefaultFolder extends BaseResource
{
	public function aggregateMediaDefaultFolder(array $data = []): Response
	{
		return $this->connector->send(new AggregateMediaDefaultFolder($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createMediaDefaultFolder(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateMediaDefaultFolder($data, $response));
	}


	/**
	 * @param string $id Identifier for the media_default_folder
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteMediaDefaultFolder(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteMediaDefaultFolder($id, $response));
	}


	/**
	 * @param string $id Identifier for the media_default_folder
	 */
	public function getMediaDefaultFolder(string $id): Response
	{
		return $this->connector->send(new GetMediaDefaultFolder($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getMediaDefaultFolderList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetMediaDefaultFolderList($limit, $page, $swQuery));
	}


	public function searchMediaDefaultFolder(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchMediaDefaultFolder($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the media_default_folder
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateMediaDefaultFolder(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateMediaDefaultFolder($id, $data, $response));
	}
}
