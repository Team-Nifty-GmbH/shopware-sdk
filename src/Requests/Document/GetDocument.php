<?php

namespace TeamNiftyGmbH\Shopware\Requests\Document;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Document;

/**
 * getDocument
 *
 * Available since: 6.0.0.0
 */
class GetDocument extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/document/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the document
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Document::from($response->json('data'));
    }
}
