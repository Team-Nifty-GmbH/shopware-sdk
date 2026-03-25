<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomEntity;

/**
 * getCustomEntity
 *
 * Available since: 6.4.9.0
 */
class GetCustomEntity extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/custom-entity/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the custom_entity
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomEntity::from($response->json('data'));
    }
}
