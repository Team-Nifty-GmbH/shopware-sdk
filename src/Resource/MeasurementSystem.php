<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MeasurementSystem\AggregateMeasurementSystem;
use TeamNiftyGmbH\Shopware\Requests\MeasurementSystem\CreateMeasurementSystem;
use TeamNiftyGmbH\Shopware\Requests\MeasurementSystem\DeleteMeasurementSystem;
use TeamNiftyGmbH\Shopware\Requests\MeasurementSystem\GetMeasurementSystem;
use TeamNiftyGmbH\Shopware\Requests\MeasurementSystem\GetMeasurementSystemList;
use TeamNiftyGmbH\Shopware\Requests\MeasurementSystem\SearchMeasurementSystem;
use TeamNiftyGmbH\Shopware\Requests\MeasurementSystem\UpdateMeasurementSystem;

class MeasurementSystem extends BaseResource
{
    public function aggregateMeasurementSystem(array $data = []): Response
    {
        return $this->connector->send(new AggregateMeasurementSystem($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createMeasurementSystem(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateMeasurementSystem($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the measurement_system
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteMeasurementSystem(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteMeasurementSystem($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the measurement_system
     */
    public function getMeasurementSystem(string $id): Response
    {
        return $this->connector->send(new GetMeasurementSystem($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getMeasurementSystemList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetMeasurementSystemList($limit, $page, $swQuery));
    }

    public function searchMeasurementSystem(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchMeasurementSystem($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the measurement_system
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateMeasurementSystem(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateMeasurementSystem($id, $data, $response));
    }
}
