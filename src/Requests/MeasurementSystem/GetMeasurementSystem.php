<?php

namespace TeamNiftyGmbH\Shopware\Requests\MeasurementSystem;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MeasurementSystem;

/**
 * getMeasurementSystem
 *
 * Available since: 6.7.1.0
 */
class GetMeasurementSystem extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/measurement-system/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the measurement_system
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return MeasurementSystem::from($response->json('data'));
    }
}
