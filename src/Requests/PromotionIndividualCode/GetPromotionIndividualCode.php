<?php

namespace TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\PromotionIndividualCode;

/**
 * getPromotionIndividualCode
 *
 * Available since: 6.0.0.0
 */
class GetPromotionIndividualCode extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotion-individual-code/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the promotion_individual_code
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return PromotionIndividualCode::from($response->json('data'));
    }
}
