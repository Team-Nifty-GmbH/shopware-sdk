<?php

namespace TeamNiftyGmbH\Shopware\Requests\Category;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Category;

/**
 * getCategory
 *
 * Available since: 6.0.0.0
 */
class GetCategory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/category/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the category
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Category::from($response->json('data'));
    }
}
