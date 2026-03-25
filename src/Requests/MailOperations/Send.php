<?php

namespace TeamNiftyGmbH\Shopware\Requests\MailOperations;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * send
 *
 * Generates a mail from a mail template and sends it to the customer.
 *
 * Take a look at the
 * `salesChannel` entity for possible values. For example `{{ salesChannel.name }}` can be used.
 */
class Send extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/_action/mail-template/send';
    }

    public function __construct(
        protected array $data = [],
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
