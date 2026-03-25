<?php

namespace TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteMeasurementDisplayUnit
 *
 * Available since: 6.7.1.0
 */
class DeleteMeasurementDisplayUnit extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/measurement-display-unit/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the measurement_display_unit
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
