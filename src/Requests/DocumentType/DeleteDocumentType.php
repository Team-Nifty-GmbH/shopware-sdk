<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentType;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteDocumentType
 *
 * Available since: 6.0.0.0
 */
class DeleteDocumentType extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/document-type/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the document_type
     * @param  null|string  $responseFormat  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $responseFormat = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->responseFormat]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
