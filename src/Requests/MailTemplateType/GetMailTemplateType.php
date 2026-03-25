<?php

namespace TeamNiftyGmbH\Shopware\Requests\MailTemplateType;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\MailTemplateType;

/**
 * getMailTemplateType
 *
 * Available since: 6.0.0.0
 */
class GetMailTemplateType extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/mail-template-type/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the mail_template_type
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return MailTemplateType::from($response->json('data'));
    }
}
