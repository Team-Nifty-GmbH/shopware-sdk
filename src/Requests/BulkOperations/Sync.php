<?php

namespace TeamNiftyGmbH\Shopware\Requests\BulkOperations;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * sync
 *
 * Starts a sync process for the list of provided actions. This can be upserts and deletes on different
 * entities to an asynchronous process in the background. You can control the behaviour with the
 * `indexing-behavior` header.
 */
class Sync extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/_action/sync';
    }

    /**
     * @param  null|bool  $failOnError  To continue upcoming actions on errors, set the `fail-on-error` header to `false`.
     * @param  null|string  $indexingBehavior  Controls the indexing behavior.
     *                                         - `disable-indexing`: Data indexing is completely disabled
     */
    public function __construct(
        protected array $data = [],
        protected ?bool $failOnError = null,
        protected ?string $indexingBehavior = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultHeaders(): array
    {
        return array_filter(['fail-on-error' => $this->failOnError, 'indexing-behavior' => $this->indexingBehavior]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
