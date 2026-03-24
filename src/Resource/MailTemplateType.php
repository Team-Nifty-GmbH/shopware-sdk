<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MailTemplateType\AggregateMailTemplateType;
use TeamNiftyGmbH\Shopware\Requests\MailTemplateType\CreateMailTemplateType;
use TeamNiftyGmbH\Shopware\Requests\MailTemplateType\DeleteMailTemplateType;
use TeamNiftyGmbH\Shopware\Requests\MailTemplateType\GetMailTemplateType;
use TeamNiftyGmbH\Shopware\Requests\MailTemplateType\GetMailTemplateTypeList;
use TeamNiftyGmbH\Shopware\Requests\MailTemplateType\SearchMailTemplateType;
use TeamNiftyGmbH\Shopware\Requests\MailTemplateType\UpdateMailTemplateType;

class MailTemplateType extends BaseResource
{
	public function aggregateMailTemplateType(array $data = []): Response
	{
		return $this->connector->send(new AggregateMailTemplateType($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createMailTemplateType(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateMailTemplateType($data, $response));
	}


	/**
	 * @param string $id Identifier for the mail_template_type
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteMailTemplateType(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteMailTemplateType($id, $response));
	}


	/**
	 * @param string $id Identifier for the mail_template_type
	 */
	public function getMailTemplateType(string $id): Response
	{
		return $this->connector->send(new GetMailTemplateType($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getMailTemplateTypeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetMailTemplateTypeList($limit, $page, $swQuery));
	}


	public function searchMailTemplateType(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchMailTemplateType($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the mail_template_type
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateMailTemplateType(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateMailTemplateType($id, $data, $response));
	}
}
