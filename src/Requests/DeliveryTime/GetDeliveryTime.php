<?php

namespace TeamNiftyGmbH\Shopware\Requests\DeliveryTime;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\DeliveryTime;

/**
 * getDeliveryTime
 *
 * Available since: 6.0.0.0
 */
class GetDeliveryTime extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/delivery-time/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the delivery_time
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return DeliveryTime::from($response->json('data'));
    }
}
