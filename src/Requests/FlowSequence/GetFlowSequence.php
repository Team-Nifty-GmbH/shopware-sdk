<?php

namespace TeamNiftyGmbH\Shopware\Requests\FlowSequence;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\FlowSequence;

/**
 * getFlowSequence
 *
 * Available since: 6.4.6.0
 */
class GetFlowSequence extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/flow-sequence/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the flow_sequence
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return FlowSequence::from($response->json('data'));
    }
}
