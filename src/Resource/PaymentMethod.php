<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PaymentMethod\AggregatePaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\PaymentMethod\CreatePaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\PaymentMethod\DeletePaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\PaymentMethod\GetPaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\PaymentMethod\GetPaymentMethodList;
use TeamNiftyGmbH\Shopware\Requests\PaymentMethod\SearchPaymentMethod;
use TeamNiftyGmbH\Shopware\Requests\PaymentMethod\UpdatePaymentMethod;

class PaymentMethod extends BaseResource
{
    public function aggregatePaymentMethod(array $data = []): Response
    {
        return $this->connector->send(new AggregatePaymentMethod($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createPaymentMethod(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreatePaymentMethod($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the payment_method
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deletePaymentMethod(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeletePaymentMethod($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the payment_method
     */
    public function getPaymentMethod(string $id): Response
    {
        return $this->connector->send(new GetPaymentMethod($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getPaymentMethodList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetPaymentMethodList($limit, $page, $swQuery));
    }

    public function searchPaymentMethod(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchPaymentMethod($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the payment_method
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updatePaymentMethod(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdatePaymentMethod($id, $data, $response));
    }
}
