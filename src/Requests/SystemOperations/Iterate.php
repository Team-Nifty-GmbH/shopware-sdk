<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemOperations;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * iterate
 *
 * Starts a defined indexer with an offset.
 *
 * for the next request. `finish: true` in the response
 * indicates that the indexer is finished
 */
class Iterate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/_action/indexing/{$this->indexer}";
    }

    /**
     * @param  string  $indexer  Name of the indexer to iterate.
     */
    public function __construct(
        protected string $indexer,
        protected array $data = [],
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
