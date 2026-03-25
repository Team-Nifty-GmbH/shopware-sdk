<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\EmailSupportValidation\SupportsEmail;

class EmailSupportValidation extends BaseResource
{
    public function supportsEmail(array $data = []): Response
    {
        return $this->connector->send(new SupportsEmail($data));
    }
}
