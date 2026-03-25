<?php

namespace TeamNiftyGmbH\Shopware\Requests\LandingPage;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\LandingPage;

/**
 * getLandingPage
 *
 * Available since: 6.4.0.0
 */
class GetLandingPage extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/landing-page/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the landing_page
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return LandingPage::from($response->json('data'));
    }
}
