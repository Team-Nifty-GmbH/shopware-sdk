<?php

namespace TeamNiftyGmbH\Shopware\Requests\TaxRuleType;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\TaxRuleType;

/**
 * updateTaxRuleType
 *
 * Available since: 6.1.0.0
 */
class UpdateTaxRuleType extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/tax-rule-type/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the tax_rule_type
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
        return TaxRuleType::from($response->json('data'));
    }
}
