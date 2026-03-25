<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AuthorizationAuthentication\Token;

class AuthorizationAuthentication extends BaseResource
{
    public function token(array $data = []): Response
    {
        return $this->connector->send(new Token($data));
    }
}
