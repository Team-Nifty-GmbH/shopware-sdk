<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode\AggregatePromotionIndividualCode;
use TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode\CreatePromotionIndividualCode;
use TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode\DeletePromotionIndividualCode;
use TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode\GetPromotionIndividualCode;
use TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode\GetPromotionIndividualCodeList;
use TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode\SearchPromotionIndividualCode;
use TeamNiftyGmbH\Shopware\Requests\PromotionIndividualCode\UpdatePromotionIndividualCode;

class PromotionIndividualCode extends BaseResource
{
    public function aggregatePromotionIndividualCode(array $data = []): Response
    {
        return $this->connector->send(new AggregatePromotionIndividualCode($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createPromotionIndividualCode(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreatePromotionIndividualCode($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the promotion_individual_code
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deletePromotionIndividualCode(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeletePromotionIndividualCode($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the promotion_individual_code
     */
    public function getPromotionIndividualCode(string $id): Response
    {
        return $this->connector->send(new GetPromotionIndividualCode($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getPromotionIndividualCodeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetPromotionIndividualCodeList($limit, $page, $swQuery));
    }

    public function searchPromotionIndividualCode(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchPromotionIndividualCode($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the promotion_individual_code
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updatePromotionIndividualCode(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdatePromotionIndividualCode($id, $data, $response));
    }
}
