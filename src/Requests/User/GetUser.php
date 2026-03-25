<?php

namespace TeamNiftyGmbH\Shopware\Requests\User;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\User;

/**
 * getUser
 *
 * Available since: 6.0.0.0
 */
class GetUser extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/user/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the user
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return User::from($response->json('data'));
    }
}
