<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createDocuments
 *
 * Creates documents for orders. Documents can for example be an invoice or a delivery note.
 */
class CreateDocuments extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/_action/order/document/{$this->documentTypeName}/create";
    }

    /**
     * @param  string  $documentTypeName  The type of document to create
     */
    public function __construct(
        protected string $documentTypeName,
        protected array $data,
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
