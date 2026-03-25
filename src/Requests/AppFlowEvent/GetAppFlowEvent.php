<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppFlowEvent;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppFlowEvent;

/**
 * getAppFlowEvent
 *
 * Available since: 6.5.2.0
 */
class GetAppFlowEvent extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/app-flow-event/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_flow_event
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return AppFlowEvent::from($response->json('data'));
    }
}
