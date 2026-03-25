<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemConfig;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * saveConfiguration
 *
 * Saves the given configuration key-value pairs for the given sales channel.
 */
class SaveConfiguration extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/_action/system-config';
    }

    /**
     * @param  null|string  $salesChannelId  The sales channel ID to scope the configuration to.
     * @param  null|bool  $silent  If true, the HTTP cache will not be invalidated. Use this for internal configuration values that do not affect the storefront.
     */
    public function __construct(
        protected array $data = [],
        protected ?string $salesChannelId = null,
        protected ?bool $silent = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['salesChannelId' => $this->salesChannelId, 'silent' => $this->silent]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
