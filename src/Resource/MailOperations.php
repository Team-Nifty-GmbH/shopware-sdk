<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MailOperations\Build;
use TeamNiftyGmbH\Shopware\Requests\MailOperations\Send;
use TeamNiftyGmbH\Shopware\Requests\MailOperations\Validate;

class MailOperations extends BaseResource
{
    public function build(array $data = []): Response
    {
        return $this->connector->send(new Build($data));
    }

    public function send(array $data = []): Response
    {
        return $this->connector->send(new Send($data));
    }

    public function validate(array $data = []): Response
    {
        return $this->connector->send(new Validate($data));
    }
}
