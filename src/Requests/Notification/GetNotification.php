<?php

namespace TeamNiftyGmbH\Shopware\Requests\Notification;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Notification;

/**
 * getNotification
 *
 * Available since: 6.4.7.0
 */
class GetNotification extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/notification/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the notification
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Notification::from($response->json('data'));
    }
}
