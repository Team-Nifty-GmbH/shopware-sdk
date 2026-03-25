<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomEntity;

/**
 * getCustomEntityList
 *
 * Available since: 6.4.9.0
 */
class GetCustomEntityList extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/custom-entity';
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $swQuery  Encoded SwagQL in JSON
     */
    public function __construct(
        protected ?int $limit = null,
        protected ?int $page = null,
        protected ?string $swQuery = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'page' => $this->page, 'query' => $this->swQuery]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return array_map(
            fn (array $item) => CustomEntity::from($item),
            $response->json('data') ?? []
        );
    }
}
