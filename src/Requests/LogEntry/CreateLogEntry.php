<?php

namespace TeamNiftyGmbH\Shopware\Requests\LogEntry;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\LogEntry;

/**
 * createLogEntry
 *
 * Available since: 6.0.0.0
 */
class CreateLogEntry extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/log-entry';
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected array $data,
        protected ?string $response = null,
    ) {}

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
        return LogEntry::from($response->json('data'));
    }
}
