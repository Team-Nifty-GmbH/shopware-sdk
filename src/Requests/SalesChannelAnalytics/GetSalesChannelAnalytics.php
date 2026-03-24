<?php

namespace TeamNiftyGmbH\Shopware\Requests\SalesChannelAnalytics;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SalesChannelAnalytics;

/**
 * getSalesChannelAnalytics
 *
 * Available since: 6.2.0.0
 */
class GetSalesChannelAnalytics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sales-channel-analytics/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the sales_channel_analytics
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SalesChannelAnalytics::from($response->json('data'));
    }
}
