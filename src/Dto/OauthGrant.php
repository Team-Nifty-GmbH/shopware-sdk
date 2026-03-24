<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class OauthGrant extends SpatieData
{
	public function __construct(
		#[MapName('grant_type')]
		public ?string $grantType = null,
	) {
	}
}
