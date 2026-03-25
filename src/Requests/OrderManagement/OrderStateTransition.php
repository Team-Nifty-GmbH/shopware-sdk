<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * orderStateTransition
 *
 * Changes the order state and informs the customer via email if configured.
 */
class OrderStateTransition extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/_action/order/{$this->orderId}/state/{$this->transition}";
    }

    /**
     * @param  string  $orderId  Identifier of the order.
     * @param  string  $transition  The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.
     *
     * Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state.
     */
    public function __construct(
        protected string $orderId,
        protected string $transition,
        protected array $data = [],
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
