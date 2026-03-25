<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\ClearCache;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\ClearCacheDelayed;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\ClearContainerCache;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\ClearOldCacheFolders;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\ConsumeMessages;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\GetMinRunInterval;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\Index;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\Indexing;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\Info;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\Iterate;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\ProductIndexing;
use TeamNiftyGmbH\Shopware\Requests\SystemOperations\RunScheduledTasks;

class SystemOperations extends BaseResource
{
    public function clearCache(): Response
    {
        return $this->connector->send(new ClearCache);
    }

    /**
     * @param  null|bool  $refreshOpenSearch  This parameter indicates that in addition to invalidating the delayed caches, the opensearch indices will also be refreshed, which should lead to a clean state on the next read requests. When OpenSearch is not used this parameter will be ignored.
     */
    public function clearCacheDelayed(?bool $refreshOpenSearch = null): Response
    {
        return $this->connector->send(new ClearCacheDelayed($refreshOpenSearch));
    }

    public function clearContainerCache(): Response
    {
        return $this->connector->send(new ClearContainerCache);
    }

    public function clearOldCacheFolders(): Response
    {
        return $this->connector->send(new ClearOldCacheFolders);
    }

    public function consumeMessages(array $data = []): Response
    {
        return $this->connector->send(new ConsumeMessages($data));
    }

    public function getMinRunInterval(): Response
    {
        return $this->connector->send(new GetMinRunInterval);
    }

    public function index(array $data = []): Response
    {
        return $this->connector->send(new Index($data));
    }

    public function indexing(array $data = []): Response
    {
        return $this->connector->send(new Indexing($data));
    }

    public function info(): Response
    {
        return $this->connector->send(new Info);
    }

    /**
     * @param  string  $indexer  Name of the indexer to iterate.
     */
    public function iterate(string $indexer, array $data = []): Response
    {
        return $this->connector->send(new Iterate($indexer, $data));
    }

    public function productIndexing(array $data = []): Response
    {
        return $this->connector->send(new ProductIndexing($data));
    }

    public function runScheduledTasks(array $data = []): Response
    {
        return $this->connector->send(new RunScheduledTasks($data));
    }
}
