<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetEntity extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $entityName,
        protected string $id,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName).'/'.$this->id;
    }
}
