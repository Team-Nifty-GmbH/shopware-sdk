<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteDocumentBaseConfig
 *
 * Available since: 6.0.0.0
 */
class DeleteDocumentBaseConfig extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/document-base-config/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the document_base_config
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $response = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
