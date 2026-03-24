<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Experimental\CallBackWithCode;
use TeamNiftyGmbH\Shopware\Requests\Experimental\InviteUser;
use TeamNiftyGmbH\Shopware\Requests\Experimental\IsSso;
use TeamNiftyGmbH\Shopware\Requests\Experimental\LoadSsoLoginConfig;
use TeamNiftyGmbH\Shopware\Requests\Experimental\SsoAuth;

class Experimental extends BaseResource
{
	public function callBackWithCode(): Response
	{
		return $this->connector->send(new CallBackWithCode());
	}


	public function inviteUser(array $data = []): Response
	{
		return $this->connector->send(new InviteUser($data));
	}


	public function isSso(): Response
	{
		return $this->connector->send(new IsSso());
	}


	public function loadSsoLoginConfig(): Response
	{
		return $this->connector->send(new LoadSsoLoginConfig());
	}


	public function ssoAuth(): Response
	{
		return $this->connector->send(new SsoAuth());
	}
}
