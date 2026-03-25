<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SwagSequenceWebhookEventLog extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $sequenceId = null,
        public ?string $webhookEventLogId = null,
    ) {}
}
