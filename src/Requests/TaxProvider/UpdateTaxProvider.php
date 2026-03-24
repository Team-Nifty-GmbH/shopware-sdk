<?php

namespace TeamNiftyGmbH\Shopware\Requests\TaxProvider;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\TaxProvider;

/**
 * updateTaxProvider
 *
 * Available since: 6.5.0.0
 */
class UpdateTaxProvider extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/tax-provider/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the tax_provider
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
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
        return TaxProvider::from($response->json('data'));
    }
}
