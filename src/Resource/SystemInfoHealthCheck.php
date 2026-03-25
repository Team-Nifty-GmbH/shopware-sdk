<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\ApiInfo;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\BusinessEvents;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\Config;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\FlowActions;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\GetMessageStats;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\GetRoutes;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\HealthCheck;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\InfoShopwareVersion;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\Queue;
use TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck\SystemHealthCheck;

class SystemInfoHealthCheck extends BaseResource
{
    /**
     * @param  null|string  $type  Type of the api
     */
    public function apiInfo(?string $type = null): Response
    {
        return $this->connector->send(new ApiInfo($type));
    }

    public function businessEvents(): Response
    {
        return $this->connector->send(new BusinessEvents);
    }

    public function config(): Response
    {
        return $this->connector->send(new Config);
    }

    public function flowActions(): Response
    {
        return $this->connector->send(new FlowActions);
    }

    public function getMessageStats(): Response
    {
        return $this->connector->send(new GetMessageStats);
    }

    public function getRoutes(): Response
    {
        return $this->connector->send(new GetRoutes);
    }

    public function healthCheck(): Response
    {
        return $this->connector->send(new HealthCheck);
    }

    public function infoShopwareVersion(): Response
    {
        return $this->connector->send(new InfoShopwareVersion);
    }

    public function queue(): Response
    {
        return $this->connector->send(new Queue);
    }

    /**
     * @param  null|bool  $verbose  Include detailed information in the response
     */
    public function systemHealthCheck(?bool $verbose = null): Response
    {
        return $this->connector->send(new SystemHealthCheck($verbose));
    }
}
