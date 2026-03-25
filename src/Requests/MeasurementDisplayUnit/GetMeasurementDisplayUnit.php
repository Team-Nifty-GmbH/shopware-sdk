<?php

namespace TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MeasurementDisplayUnit;

/**
 * getMeasurementDisplayUnit
 *
 * Available since: 6.7.1.0
 */
class GetMeasurementDisplayUnit extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/measurement-display-unit/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the measurement_display_unit
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return MeasurementDisplayUnit::from($response->json('data'));
    }
}
