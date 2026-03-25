<?php

namespace TeamNiftyGmbH\Shopware\Requests\NewsletterRecipient;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\NewsletterRecipient;

/**
 * getNewsletterRecipient
 *
 * Available since: 6.0.0.0
 */
class GetNewsletterRecipient extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/newsletter-recipient/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the newsletter_recipient
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return NewsletterRecipient::from($response->json('data'));
    }
}
