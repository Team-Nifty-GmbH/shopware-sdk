<?php

namespace TeamNiftyGmbH\Shopware\Requests\UserAccessKey;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\UserAccessKey;

/**
 * getUserAccessKey
 *
 * Available since: 6.0.0.0
 */
class GetUserAccessKey extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/user-access-key/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the user_access_key
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return UserAccessKey::from($response->json('data'));
    }
}
