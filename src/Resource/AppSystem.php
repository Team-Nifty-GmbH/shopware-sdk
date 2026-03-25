<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppSystem\AppSecretRotation;
use TeamNiftyGmbH\Shopware\Requests\AppSystem\GetAcceptedPrivileges;
use TeamNiftyGmbH\Shopware\Requests\AppSystem\GetRequestedPrivileges;
use TeamNiftyGmbH\Shopware\Requests\AppSystem\ManagePrivileges;

class AppSystem extends BaseResource
{
    public function appSecretRotation(array $data = []): Response
    {
        return $this->connector->send(new AppSecretRotation($data));
    }

    public function getAcceptedPrivileges(string $appName): Response
    {
        return $this->connector->send(new GetAcceptedPrivileges($appName));
    }

    public function getRequestedPrivileges(): Response
    {
        return $this->connector->send(new GetRequestedPrivileges);
    }

    public function managePrivileges(string $appName, array $data = []): Response
    {
        return $this->connector->send(new ManagePrivileges($appName, $data));
    }
}
