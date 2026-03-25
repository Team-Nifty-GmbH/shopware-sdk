<?php

namespace TeamNiftyGmbH\Shopware\Requests\LandingPage;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteLandingPage
 *
 * Available since: 6.4.0.0
 */
class DeleteLandingPage extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/landing-page/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the landing_page
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
