<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient\AggregateNewsletterRecipient;
use TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient\CreateNewsletterRecipient;
use TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient\DeleteNewsletterRecipient;
use TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient\GetNewsletterRecipient;
use TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient\GetNewsletterRecipientList;
use TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient\SearchNewsletterRecipient;
use TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient\UpdateNewsletterRecipient;

class NewsletterRecipient extends BaseResource
{
	public function aggregateNewsletterRecipient(array $data = []): Response
	{
		return $this->connector->send(new AggregateNewsletterRecipient($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createNewsletterRecipient(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateNewsletterRecipient($data, $response));
	}


	/**
	 * @param string $id Identifier for the newsletter_recipient
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteNewsletterRecipient(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteNewsletterRecipient($id, $response));
	}


	/**
	 * @param string $id Identifier for the newsletter_recipient
	 */
	public function getNewsletterRecipient(string $id): Response
	{
		return $this->connector->send(new GetNewsletterRecipient($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getNewsletterRecipientList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetNewsletterRecipientList($limit, $page, $swQuery));
	}


	public function searchNewsletterRecipient(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchNewsletterRecipient($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the newsletter_recipient
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateNewsletterRecipient(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateNewsletterRecipient($id, $data, $response));
	}
}
