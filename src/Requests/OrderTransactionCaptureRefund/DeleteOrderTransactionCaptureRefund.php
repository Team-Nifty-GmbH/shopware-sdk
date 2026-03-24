<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteOrderTransactionCaptureRefund
 *
 * Available since: 6.4.12.0
 */
class DeleteOrderTransactionCaptureRefund extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/order-transaction-capture-refund/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture_refund
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected ?string $response = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
