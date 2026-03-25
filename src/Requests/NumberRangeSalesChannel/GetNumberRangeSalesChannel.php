<?php

namespace TeamNiftyGmbH\Shopware\Requests\NumberRangeSalesChannel;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\NumberRangeSalesChannel;

/**
 * getNumberRangeSalesChannel
 *
 * Available since: 6.0.0.0
 */
class GetNumberRangeSalesChannel extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/number-range-sales-channel/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the number_range_sales_channel
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return NumberRangeSalesChannel::from($response->json('data'));
    }
}
