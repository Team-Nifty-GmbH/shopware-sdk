<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class SearchEntity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $entityName,
        protected array $data = [],
    ) {}

    public function resolveEndpoint(): string
    {
        return '/search/'.str_replace('_', '-', $this->entityName);
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
