<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\DocumentBaseConfigSalesChannel;

/**
 * getDocumentBaseConfigSalesChannel
 *
 * Available since: 6.0.0.0
 */
class GetDocumentBaseConfigSalesChannel extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/document-base-config-sales-channel/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the document_base_config_sales_channel
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return DocumentBaseConfigSalesChannel::from($response->json('data'));
    }
}
