<?php

namespace TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * aggregateMailHeaderFooter
 *
 * Available since: 6.6.10.0
 */
class AggregateMailHeaderFooter extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/aggregate/mail-header-footer';
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
