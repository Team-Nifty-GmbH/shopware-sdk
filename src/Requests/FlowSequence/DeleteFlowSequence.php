<?php

namespace TeamNiftyGmbH\Shopware\Requests\FlowSequence;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteFlowSequence
 *
 * Available since: 6.4.6.0
 */
class DeleteFlowSequence extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/flow-sequence/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the flow_sequence
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
