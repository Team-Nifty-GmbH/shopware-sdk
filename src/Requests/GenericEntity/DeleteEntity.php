<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteEntity extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(
        protected string $entityName,
        protected string $id,
        protected ?string $response = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName).'/'.$this->id;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }
}
