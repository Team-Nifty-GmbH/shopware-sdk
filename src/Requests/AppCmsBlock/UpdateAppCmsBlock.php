<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppCmsBlock;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppCmsBlock;

/**
 * updateAppCmsBlock
 *
 * Available since: 6.4.2.0
 */
class UpdateAppCmsBlock extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/app-cms-block/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_cms_block
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected array $data,
		protected ?string $response = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return AppCmsBlock::from($response->json('data'));
    }
}
