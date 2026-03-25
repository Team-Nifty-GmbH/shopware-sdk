<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeState\AggregateNumberRangeState;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeState\CreateNumberRangeState;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeState\DeleteNumberRangeState;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeState\GetNumberRangeState;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeState\GetNumberRangeStateList;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeState\SearchNumberRangeState;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeState\UpdateNumberRangeState;

class NumberRangeState extends BaseResource
{
    public function aggregateNumberRangeState(array $data = []): Response
    {
        return $this->connector->send(new AggregateNumberRangeState($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createNumberRangeState(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateNumberRangeState($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the number_range_state
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteNumberRangeState(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteNumberRangeState($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the number_range_state
     */
    public function getNumberRangeState(string $id): Response
    {
        return $this->connector->send(new GetNumberRangeState($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getNumberRangeStateList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetNumberRangeStateList($limit, $page, $swQuery));
    }

    public function searchNumberRangeState(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchNumberRangeState($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the number_range_state
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateNumberRangeState(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateNumberRangeState($id, $data, $response));
    }
}
