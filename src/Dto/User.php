<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class User extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $localeId = null,
        public ?string $username = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $title = null,
        public ?string $email = null,
        public ?bool $active = null,
        public ?bool $admin = null,
        public ?string $lastUpdatedPasswordAt = null,
        public ?string $timeZone = null,
        public ?object $customFields = null,
        public ?string $avatarId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $extensions = null,
        public ?Locale $locale = null,
        public ?Media $avatarMedia = null,
        public ?array $media = null,
        public ?array $accessKeys = null,
        public ?array $configs = null,
        public ?array $stateMachineHistoryEntries = null,
        public ?array $importExportLogEntries = null,
        public ?array $aclRoles = null,
        public ?UserRecovery $recoveryUser = null,
        public ?array $createdOrders = null,
        public ?array $updatedOrders = null,
        public ?array $createdCustomers = null,
        public ?array $updatedCustomers = null,
    ) {}
}
