<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\NumberRange\AggregateNumberRange;
use TeamNiftyGmbH\Shopware\Requests\NumberRange\CreateNumberRange;
use TeamNiftyGmbH\Shopware\Requests\NumberRange\DeleteNumberRange;
use TeamNiftyGmbH\Shopware\Requests\NumberRange\GetNumberRange;
use TeamNiftyGmbH\Shopware\Requests\NumberRange\GetNumberRangeList;
use TeamNiftyGmbH\Shopware\Requests\NumberRange\SearchNumberRange;
use TeamNiftyGmbH\Shopware\Requests\NumberRange\UpdateNumberRange;

class NumberRange extends BaseResource
{
    public function aggregateNumberRange(array $data = []): Response
    {
        return $this->connector->send(new AggregateNumberRange($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createNumberRange(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateNumberRange($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the number_range
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteNumberRange(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteNumberRange($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the number_range
     */
    public function getNumberRange(string $id): Response
    {
        return $this->connector->send(new GetNumberRange($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getNumberRangeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetNumberRangeList($limit, $page, $swQuery));
    }

    public function searchNumberRange(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchNumberRange($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the number_range
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateNumberRange(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateNumberRange($id, $data, $response));
    }
}
