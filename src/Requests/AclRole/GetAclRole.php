<?php

namespace TeamNiftyGmbH\Shopware\Requests\AclRole;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AclRole;

/**
 * getAclRole
 *
 * Available since: 6.0.0.0
 */
class GetAclRole extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/acl-role/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the acl_role
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return AclRole::from($response->json('data'));
    }
}
