<?php

namespace TeamNiftyGmbH\Shopware\Requests\MeasurementSystem;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteMeasurementSystem
 *
 * Available since: 6.7.1.0
 */
class DeleteMeasurementSystem extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/measurement-system/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the measurement_system
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
