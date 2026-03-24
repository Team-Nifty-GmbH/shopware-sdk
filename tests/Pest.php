<?php

// No TestCase binding needed for Unit tests - this is a plain PHP SDK

// Integration tests use their own base class
uses(TeamNiftyGmbH\Shopware\Tests\Integration\IntegrationTestCase::class)->in('Integration');
