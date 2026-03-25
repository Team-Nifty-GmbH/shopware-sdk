<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\OrderTransactionCapture;

/**
 * searchOrderTransactionCapture
 *
 * Available since: 6.4.12.0
 */
class SearchOrderTransactionCapture extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/search/order-transaction-capture';
    }

    /**
     * @param  null|string  $swIncludeSearchInfo  Controls whether API search information is included in the response. Default is 1 (enabled), will be 0 (disabled) in the next major version.
     */
    public function __construct(
        protected array $data = [],
        protected ?string $swIncludeSearchInfo = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultHeaders(): array
    {
        return array_filter(['sw-include-search-info' => $this->swIncludeSearchInfo]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return array_map(
            fn (array $item) => OrderTransactionCapture::from($item),
            $response->json('data') ?? []
        );
    }
}
