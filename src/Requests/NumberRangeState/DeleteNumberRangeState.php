<?php

namespace TeamNiftyGmbH\Shopware\Requests\NumberRangeState;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteNumberRangeState
 *
 * Available since: 6.0.0.0
 */
class DeleteNumberRangeState extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/number-range-state/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the number_range_state
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $response = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
