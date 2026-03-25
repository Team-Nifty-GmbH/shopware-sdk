<?php

namespace TeamNiftyGmbH\Shopware\Requests\UserConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteUserConfig
 *
 * Available since: 6.3.5.0
 */
class DeleteUserConfig extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/user-config/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the user_config
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
