<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AccountNewsletterRecipientResult extends SpatieData
{
    public function __construct(
        public ?string $status = null,
    ) {}
}
