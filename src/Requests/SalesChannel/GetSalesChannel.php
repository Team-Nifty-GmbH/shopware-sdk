<?php

namespace TeamNiftyGmbH\Shopware\Requests\SalesChannel;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SalesChannel;

/**
 * getSalesChannel
 *
 * Available since: 6.0.0.0
 */
class GetSalesChannel extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sales-channel/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the sales_channel
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return SalesChannel::from($response->json('data'));
    }
}
