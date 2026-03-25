<?php

namespace TeamNiftyGmbH\Shopware\Requests\MailHeaderFooter;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteMailHeaderFooter
 *
 * Available since: 6.0.0.0
 */
class DeleteMailHeaderFooter extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/mail-header-footer/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the mail_header_footer
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $response = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
