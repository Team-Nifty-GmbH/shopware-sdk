<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteDocumentBaseConfigSalesChannel
 *
 * Available since: 6.0.0.0
 */
class DeleteDocumentBaseConfigSalesChannel extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/document-base-config-sales-channel/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the document_base_config_sales_channel
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected ?string $response = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
