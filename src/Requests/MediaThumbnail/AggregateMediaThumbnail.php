<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaThumbnail;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * aggregateMediaThumbnail
 *
 * Available since: 6.6.10.0
 */
class AggregateMediaThumbnail extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/aggregate/media-thumbnail';
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
