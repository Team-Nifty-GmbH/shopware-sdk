<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionSetgroup;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * aggregatePromotionSetgroup
 *
 * Available since: 6.6.10.0
 */
class AggregatePromotionSetgroup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/aggregate/promotion-setgroup";
	}


	public function __construct(
		protected array $data = [],
	)
	{
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
