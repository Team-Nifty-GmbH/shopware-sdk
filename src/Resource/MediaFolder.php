<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MediaFolder\AggregateMediaFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaFolder\CreateMediaFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaFolder\DeleteMediaFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaFolder\GetMediaFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaFolder\GetMediaFolderList;
use TeamNiftyGmbH\Shopware\Requests\MediaFolder\SearchMediaFolder;
use TeamNiftyGmbH\Shopware\Requests\MediaFolder\UpdateMediaFolder;

class MediaFolder extends BaseResource
{
	public function aggregateMediaFolder(array $data = []): Response
	{
		return $this->connector->send(new AggregateMediaFolder($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createMediaFolder(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateMediaFolder($data, $response));
	}


	/**
	 * @param string $id Identifier for the media_folder
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteMediaFolder(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteMediaFolder($id, $response));
	}


	/**
	 * @param string $id Identifier for the media_folder
	 */
	public function getMediaFolder(string $id): Response
	{
		return $this->connector->send(new GetMediaFolder($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getMediaFolderList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetMediaFolderList($limit, $page, $swQuery));
	}


	public function searchMediaFolder(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchMediaFolder($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the media_folder
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateMediaFolder(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateMediaFolder($id, $data, $response));
	}
}
