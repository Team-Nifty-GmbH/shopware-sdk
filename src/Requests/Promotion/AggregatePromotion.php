<?php

namespace TeamNiftyGmbH\Shopware\Requests\Promotion;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * aggregatePromotion
 *
 * Available since: 6.6.10.0
 */
class AggregatePromotion extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/aggregate/promotion';
    }

    public function __construct(
        protected array $data = [],
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
