<?php

namespace TeamNiftyGmbH\Shopware\Requests\NumberRangeType;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\NumberRangeType;

/**
 * getNumberRangeType
 *
 * Available since: 6.0.0.0
 */
class GetNumberRangeType extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/number-range-type/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the number_range_type
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return NumberRangeType::from($response->json('data'));
    }
}
