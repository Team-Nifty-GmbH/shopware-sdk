<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class OauthClientCredentialsGrant extends SpatieData
{
    public function __construct(
        #[MapName('grant_type')]
        public ?string $grantType = null,
        #[MapName('client_id')]
        public ?string $clientId = null,
        #[MapName('client_secret')]
        public ?string $clientSecret = null,
    ) {}
}
