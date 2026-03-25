<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppFlowAction;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppFlowAction;

/**
 * getAppFlowAction
 *
 * Available since: 6.4.10.0
 */
class GetAppFlowAction extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/app-flow-action/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_flow_action
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return AppFlowAction::from($response->json('data'));
    }
}
