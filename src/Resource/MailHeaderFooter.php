<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter\AggregateMailHeaderFooter;
use TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter\CreateMailHeaderFooter;
use TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter\DeleteMailHeaderFooter;
use TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter\GetMailHeaderFooter;
use TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter\GetMailHeaderFooterList;
use TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter\SearchMailHeaderFooter;
use TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter\UpdateMailHeaderFooter;

class MailHeaderFooter extends BaseResource
{
	public function aggregateMailHeaderFooter(array $data = []): Response
	{
		return $this->connector->send(new AggregateMailHeaderFooter($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createMailHeaderFooter(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateMailHeaderFooter($data, $response));
	}


	/**
	 * @param string $id Identifier for the mail_header_footer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteMailHeaderFooter(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteMailHeaderFooter($id, $response));
	}


	/**
	 * @param string $id Identifier for the mail_header_footer
	 */
	public function getMailHeaderFooter(string $id): Response
	{
		return $this->connector->send(new GetMailHeaderFooter($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getMailHeaderFooterList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetMailHeaderFooterList($limit, $page, $swQuery));
	}


	public function searchMailHeaderFooter(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchMailHeaderFooter($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the mail_header_footer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateMailHeaderFooter(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateMailHeaderFooter($id, $data, $response));
	}
}
