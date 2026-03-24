<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderLineItem;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderLineItem;

/**
 * getOrderLineItem
 *
 * Available since: 6.0.0.0
 */
class GetOrderLineItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/order-line-item/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the order_line_item
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderLineItem::from($response->json('data'));
    }
}
