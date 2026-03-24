<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * orderDeliveryStateTransition
 *
 * Changes the order delivery state and informs the customer via email if configured.
 */
class OrderDeliveryStateTransition extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/order_delivery/{$this->orderDeliveryId}/state/{$this->transition}";
	}


	/**
	 * @param string $orderDeliveryId Identifier of the order delivery.
	 * @param string $transition The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.
	 *
	 * Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state.
	 */
	public function __construct(
		protected string $orderDeliveryId,
		protected string $transition,
		protected array $data = [],
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
