<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentType;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\DocumentType;

/**
 * getDocumentType
 *
 * Available since: 6.0.0.0
 */
class GetDocumentType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/document-type/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the document_type
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return DocumentType::from($response->json('data'));
    }
}
