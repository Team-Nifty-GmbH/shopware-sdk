<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CustomerImpersonation\GenerateImitateCustomerToken;

class CustomerImpersonation extends BaseResource
{
    public function generateImitateCustomerToken(array $data = []): Response
    {
        return $this->connector->send(new GenerateImitateCustomerToken($data));
    }
}
