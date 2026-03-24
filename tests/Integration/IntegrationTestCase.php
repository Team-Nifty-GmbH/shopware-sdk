<?php

namespace TeamNiftyGmbH\Shopware\Tests\Integration;

use PHPUnit\Framework\TestCase;
use TeamNiftyGmbH\Shopware\Shopware;

class IntegrationTestCase extends TestCase
{
    protected static ?Shopware $shopware = null;

    protected function shopware(): Shopware
    {
        if (static::$shopware === null) {
            $this->loadEnv();

            static::$shopware = new Shopware(
                baseUrl: $_ENV['SHOPWARE_BASE_URL'],
                clientId: $_ENV['SHOPWARE_CLIENT_ID'],
                clientSecret: $_ENV['SHOPWARE_CLIENT_SECRET'],
            );

            // Authenticate using client credentials grant
            $authenticator = static::$shopware->getAccessToken();
            static::$shopware->authenticate($authenticator);
        }

        return static::$shopware;
    }

    private function loadEnv(): void
    {
        $envFile = __DIR__ . '/../../.env.testing';

        if (! file_exists($envFile)) {
            $this->markTestSkipped(
                'Integration tests require a running Shopware instance. Run: docker compose up -d && bin/setup-test-integration.sh'
            );
        }

        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (str_starts_with($line, '#')) {
                continue;
            }
            [$key, $value] = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}
