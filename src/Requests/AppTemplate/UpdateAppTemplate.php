<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppTemplate;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\AppTemplate;

/**
 * updateAppTemplate
 *
 * Available since: 6.3.1.0
 */
class UpdateAppTemplate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/app-template/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the app_template
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
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
        return AppTemplate::from($response->json('data'));
    }
}
