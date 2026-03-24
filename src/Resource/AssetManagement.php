<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AssetManagement\AddExternalThumbnails;
use TeamNiftyGmbH\Shopware\Requests\AssetManagement\AssignVideoCover;
use TeamNiftyGmbH\Shopware\Requests\AssetManagement\DeleteExternalThumbnails;
use TeamNiftyGmbH\Shopware\Requests\AssetManagement\ExternalLink;
use TeamNiftyGmbH\Shopware\Requests\AssetManagement\Upload;
use TeamNiftyGmbH\Shopware\Requests\AssetManagement\UploadByUrl;
use TeamNiftyGmbH\Shopware\Requests\AssetManagement\UploadV2;

class AssetManagement extends BaseResource
{
	/**
	 * @param mixed $mediaId ID of the external media entity the thumbnails will be attached to.
	 */
	public function addExternalThumbnails(mixed $mediaId, array $data = []): Response
	{
		return $this->connector->send(new AddExternalThumbnails($mediaId, $data));
	}


	/**
	 * @param mixed $mediaId ID of the video media entity
	 */
	public function assignVideoCover(mixed $mediaId, array $data = []): Response
	{
		return $this->connector->send(new AssignVideoCover($mediaId, $data));
	}


	/**
	 * @param mixed $mediaId ID of the external media entity the thumbnails will be deleted from..
	 */
	public function deleteExternalThumbnails(mixed $mediaId): Response
	{
		return $this->connector->send(new DeleteExternalThumbnails($mediaId));
	}


	public function externalLink(array $data = []): Response
	{
		return $this->connector->send(new ExternalLink($data));
	}


	/**
	 * @param mixed $mediaId Identifier of the media entity.
	 * @param string $extension Extension of the uploaded file. For example `png`
	 * @param null|string $fileName Name of the uploaded file. If not provided the media identifier will be used as name
	 */
	public function upload(mixed $mediaId, string $extension, array $data = [], ?string $fileName = null): Response
	{
		return $this->connector->send(new Upload($mediaId, $extension, $data, $fileName));
	}


	public function uploadByUrl(array $data = []): Response
	{
		return $this->connector->send(new UploadByUrl($data));
	}


	public function uploadV2(array $data = []): Response
	{
		return $this->connector->send(new UploadV2($data));
	}
}
