<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderTransactionCapture;

/**
 * getOrderTransactionCapture
 *
 * Available since: 6.4.12.0
 */
class GetOrderTransactionCapture extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/order-transaction-capture/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderTransactionCapture::from($response->json('data'));
    }
}
