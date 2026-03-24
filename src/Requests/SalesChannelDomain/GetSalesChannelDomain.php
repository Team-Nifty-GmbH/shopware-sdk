<?php

namespace TeamNiftyGmbH\Shopware\Requests\SalesChannelDomain;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SalesChannelDomain;

/**
 * getSalesChannelDomain
 *
 * Available since: 6.0.0.0
 */
class GetSalesChannelDomain extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sales-channel-domain/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the sales_channel_domain
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SalesChannelDomain::from($response->json('data'));
    }
}
