<?php

namespace TeamNiftyGmbH\Shopware\Requests\UserRecovery;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\UserRecovery;

/**
 * getUserRecovery
 *
 * Available since: 6.0.0.0
 */
class GetUserRecovery extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/user-recovery/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the user_recovery
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return UserRecovery::from($response->json('data'));
    }
}
