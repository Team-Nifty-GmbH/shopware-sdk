<?php

namespace TeamNiftyGmbH\Shopware\Requests\NumberRangeState;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\NumberRangeState;

/**
 * getNumberRangeState
 *
 * Available since: 6.0.0.0
 */
class GetNumberRangeState extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/number-range-state/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the number_range_state
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return NumberRangeState::from($response->json('data'));
    }
}
