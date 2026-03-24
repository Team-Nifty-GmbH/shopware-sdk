<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerRecovery;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCustomerRecovery
 *
 * Available since: 6.1.0.0
 */
class DeleteCustomerRecovery extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customer-recovery/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the customer_recovery
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected ?string $response = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
