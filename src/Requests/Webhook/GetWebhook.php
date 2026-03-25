<?php

namespace TeamNiftyGmbH\Shopware\Requests\Webhook;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Webhook;

/**
 * getWebhook
 *
 * Available since: 6.3.1.0
 */
class GetWebhook extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/webhook/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the webhook
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Webhook::from($response->json('data'));
    }
}
