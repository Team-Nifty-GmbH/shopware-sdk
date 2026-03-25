<?php

namespace TeamNiftyGmbH\Shopware\Requests\RuleCondition;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\RuleCondition;

/**
 * updateRuleCondition
 *
 * Available since: 6.0.0.0
 */
class UpdateRuleCondition extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/rule-condition/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the rule_condition
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
        return RuleCondition::from($response->json('data'));
    }
}
