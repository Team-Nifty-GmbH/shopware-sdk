<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit\AggregateMeasurementDisplayUnit;
use TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit\CreateMeasurementDisplayUnit;
use TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit\DeleteMeasurementDisplayUnit;
use TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit\GetMeasurementDisplayUnit;
use TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit\GetMeasurementDisplayUnitList;
use TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit\SearchMeasurementDisplayUnit;
use TeamNiftyGmbH\Shopware\Requests\MeasurementDisplayUnit\UpdateMeasurementDisplayUnit;

class MeasurementDisplayUnit extends BaseResource
{
    public function aggregateMeasurementDisplayUnit(array $data = []): Response
    {
        return $this->connector->send(new AggregateMeasurementDisplayUnit($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createMeasurementDisplayUnit(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateMeasurementDisplayUnit($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the measurement_display_unit
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteMeasurementDisplayUnit(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteMeasurementDisplayUnit($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the measurement_display_unit
     */
    public function getMeasurementDisplayUnit(string $id): Response
    {
        return $this->connector->send(new GetMeasurementDisplayUnit($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getMeasurementDisplayUnitList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetMeasurementDisplayUnitList($limit, $page, $swQuery));
    }

    public function searchMeasurementDisplayUnit(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchMeasurementDisplayUnit($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the measurement_display_unit
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateMeasurementDisplayUnit(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateMeasurementDisplayUnit($id, $data, $response));
    }
}
