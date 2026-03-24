<?php

namespace TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MeasurementDisplayUnit;

/**
 * createMeasurementDisplayUnit
 *
 * Available since: 6.7.1.0
 */
class CreateMeasurementDisplayUnit extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/measurement-display-unit";
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected array $data,
		protected ?string $response = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MeasurementDisplayUnit::from($response->json('data'));
    }
}
