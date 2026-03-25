<?php

namespace TeamNiftyGmbH\Shopware\Requests\IncrementStorage;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * incrementValue
 *
 * Increments a value by key in the specified increment pool. This operation increments the counter for
 * the given key and returns a success response.
 */
class IncrementValue extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/_action/increment/{$this->pool}";
    }

    /**
     * @param  string  $pool  The name of the increment pool (e.g., 'user_activity', 'message_queue').
     * @param  null|string  $cluster  Optional cluster identifier for the increment operation.
     */
    public function __construct(
        protected string $pool,
        protected array $data = [],
        protected ?string $cluster = null,
    ) {}

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
