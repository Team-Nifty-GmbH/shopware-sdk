<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\DocumentBaseConfig;

/**
 * getDocumentBaseConfig
 *
 * Available since: 6.0.0.0
 */
class GetDocumentBaseConfig extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/document-base-config/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the document_base_config
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return DocumentBaseConfig::from($response->json('data'));
    }
}
