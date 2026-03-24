<?php

namespace TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MailHeaderFooter;

/**
 * getMailHeaderFooter
 *
 * Available since: 6.0.0.0
 */
class GetMailHeaderFooter extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/mail-header-footer/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the mail_header_footer
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return MailHeaderFooter::from($response->json('data'));
    }
}
