<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppFlowAction;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppFlowAction
 *
 * Available since: 6.4.10.0
 */
class DeleteAppFlowAction extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/app-flow-action/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_flow_action
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
