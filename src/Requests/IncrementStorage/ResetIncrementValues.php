<?php

namespace TeamNiftyGmbH\Shopware\Requests\IncrementStorage;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * resetIncrementValues
 *
 * Resets increment values in the specified pool. Can reset all values or a specific key if provided.
 */
class ResetIncrementValues extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/_action/reset-increment/{$this->pool}";
    }

    /**
     * @param  string  $pool  The name of the increment pool to reset.
     * @param  string  $cluster  Cluster identifier for the reset operation.
     */
    public function __construct(
        protected string $pool,
        protected string $cluster,
        protected array $data = [],
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
