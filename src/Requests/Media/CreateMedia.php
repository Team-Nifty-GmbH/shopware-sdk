<?php

namespace TeamNiftyGmbH\Shopware\Requests\Media;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\Media;

/**
 * createMedia
 *
 * Available since: 6.0.0.0
 */
class CreateMedia extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/media';
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected array $data,
        protected ?string $response = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return Media::from($response->json('data'));
    }
}
