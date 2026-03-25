<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\ConsentManagement\AcceptConsent;
use TeamNiftyGmbH\Shopware\Requests\ConsentManagement\FetchConsents;
use TeamNiftyGmbH\Shopware\Requests\ConsentManagement\RevokeConsent;

class ConsentManagement extends BaseResource
{
    public function acceptConsent(array $data = []): Response
    {
        return $this->connector->send(new AcceptConsent($data));
    }

    public function fetchConsents(): Response
    {
        return $this->connector->send(new FetchConsents);
    }

    public function revokeConsent(array $data = []): Response
    {
        return $this->connector->send(new RevokeConsent($data));
    }
}
