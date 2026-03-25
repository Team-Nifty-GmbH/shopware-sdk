<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderManagement\OrderDeliveryStateTransition;
use TeamNiftyGmbH\Shopware\Requests\OrderManagement\OrderStateTransition;
use TeamNiftyGmbH\Shopware\Requests\OrderManagement\OrderTransactionCaptureRefund;
use TeamNiftyGmbH\Shopware\Requests\OrderManagement\OrderTransactionStateTransition;

class OrderManagement extends BaseResource
{
    /**
     * @param  string  $orderDeliveryId  Identifier of the order delivery.
     * @param  string  $transition  The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress. * Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state.
     */
    public function orderDeliveryStateTransition(string $orderDeliveryId, string $transition, array $data = []): Response
    {
        return $this->connector->send(new OrderDeliveryStateTransition($orderDeliveryId, $transition, $data));
    }

    /**
     * @param  string  $orderId  Identifier of the order.
     * @param  string  $transition  The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress. * Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state.
     */
    public function orderStateTransition(string $orderId, string $transition, array $data = []): Response
    {
        return $this->connector->send(new OrderStateTransition($orderId, $transition, $data));
    }

    /**
     * @param  string  $refundId  Identifier of the order transaction capture refund.
     */
    public function orderTransactionCaptureRefund(string $refundId, array $data = []): Response
    {
        return $this->connector->send(new OrderTransactionCaptureRefund($refundId, $data));
    }

    /**
     * @param  string  $orderTransactionId  Identifier of the order transaction.
     * @param  string  $transition  The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress. * Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state.
     */
    public function orderTransactionStateTransition(string $orderTransactionId, string $transition, array $data = []): Response
    {
        return $this->connector->send(new OrderTransactionStateTransition($orderTransactionId, $transition, $data));
    }
}
