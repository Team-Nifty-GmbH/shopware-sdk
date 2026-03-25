<?php

namespace TeamNiftyGmbH\Shopware\Requests\FlowTemplate;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\FlowTemplate;

/**
 * getFlowTemplate
 *
 * Available since: 6.4.18.0
 */
class GetFlowTemplate extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/flow-template/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the flow_template
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return FlowTemplate::from($response->json('data'));
    }
}
