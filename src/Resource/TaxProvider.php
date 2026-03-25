<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\TaxProvider\AggregateTaxProvider;
use TeamNiftyGmbH\Shopware\Requests\TaxProvider\CreateTaxProvider;
use TeamNiftyGmbH\Shopware\Requests\TaxProvider\DeleteTaxProvider;
use TeamNiftyGmbH\Shopware\Requests\TaxProvider\GetTaxProvider;
use TeamNiftyGmbH\Shopware\Requests\TaxProvider\GetTaxProviderList;
use TeamNiftyGmbH\Shopware\Requests\TaxProvider\SearchTaxProvider;
use TeamNiftyGmbH\Shopware\Requests\TaxProvider\UpdateTaxProvider;

class TaxProvider extends BaseResource
{
    public function aggregateTaxProvider(array $data = []): Response
    {
        return $this->connector->send(new AggregateTaxProvider($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createTaxProvider(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateTaxProvider($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the tax_provider
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteTaxProvider(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteTaxProvider($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the tax_provider
     */
    public function getTaxProvider(string $id): Response
    {
        return $this->connector->send(new GetTaxProvider($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getTaxProviderList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetTaxProviderList($limit, $page, $swQuery));
    }

    public function searchTaxProvider(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchTaxProvider($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the tax_provider
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateTaxProvider(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateTaxProvider($id, $data, $response));
    }
}
