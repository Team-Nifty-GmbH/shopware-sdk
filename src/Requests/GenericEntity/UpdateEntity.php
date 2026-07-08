<?php

namespace TeamNiftyGmbH\Shopware\Requests\GenericEntity;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateEntity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(
        protected string $entityName,
        protected string $id,
        protected array $data,
        protected ?string $response = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/'.str_replace('_', '-', $this->entityName).'/'.$this->id;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }
}
