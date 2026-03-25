<?php

namespace TeamNiftyGmbH\Shopware\Requests\TaxRule;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\TaxRule;

/**
 * updateTaxRule
 *
 * Available since: 6.1.0.0
 */
class UpdateTaxRule extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/tax-rule/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the tax_rule
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected array $data,
        protected ?string $response = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return TaxRule::from($response->json('data'));
    }
}
