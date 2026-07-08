<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetEntityList extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $entityName,
        protected ?int $limit = null,
        protected ?int $page = null,
        protected ?string $swQuery = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName);
    }

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'page' => $this->page, 'query' => $this->swQuery]);
    }
}
