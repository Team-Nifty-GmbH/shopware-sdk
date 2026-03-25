<?php

namespace TeamNiftyGmbH\Shopware\Requests\MailTemplate;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MailTemplate;

/**
 * getMailTemplate
 *
 * Available since: 6.0.0.0
 */
class GetMailTemplate extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/mail-template/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the mail_template
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return MailTemplate::from($response->json('data'));
    }
}
