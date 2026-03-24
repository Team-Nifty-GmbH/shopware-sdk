<?php

namespace TeamNiftyGmbH\Shopware\Requests\IncrementStorage;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * decrementValue
 *
 * Decrements a value by key in the specified increment pool. This operation decrements the counter for
 * the given key and returns a success response.
 */
class DecrementValue extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/decrement/{$this->pool}";
	}


	/**
	 * @param string $pool The name of the increment pool.
	 * @param null|string $cluster Optional cluster identifier for the decrement operation.
	 */
	public function __construct(
		protected string $pool,
		protected array $data = [],
		protected ?string $cluster = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['cluster' => $this->cluster]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
