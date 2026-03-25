<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentManagement;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * downloadDocument
 *
 * Download a document by its identifier and deep link code.
 */
class DownloadDocument extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/_action/document/{$this->documentId}/{$this->deepLinkCode}";
    }

    /**
     * @param  string  $documentId  Identifier of the document to be downloaded.
     * @param  string  $deepLinkCode  A unique hash code which was generated when the document was created.
     * @param  null|bool  $download  This parameter controls the `Content-Disposition` header. If set to `true` the header will be set to `attachment` else `inline`.
     */
    public function __construct(
        protected string $documentId,
        protected string $deepLinkCode,
        protected ?bool $download = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['download' => $this->download]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
