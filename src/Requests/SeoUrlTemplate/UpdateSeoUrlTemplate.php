<?php

namespace TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\SeoUrlTemplate;

/**
 * updateSeoUrlTemplate
 *
 * Available since: 6.0.0.0
 */
class UpdateSeoUrlTemplate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/seo-url-template/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the seo_url_template
     * @param  null|string  $responseFormat  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected array $data,
        protected ?string $responseFormat = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->responseFormat]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return SeoUrlTemplate::from($response->json('data'));
    }
}
