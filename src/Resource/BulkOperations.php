<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\BulkOperations\Sync;

class BulkOperations extends BaseResource
{
    /**
     * @param  null|bool  $failOnError  To continue upcoming actions on errors, set the `fail-on-error` header to `false`.
     * @param  null|string  $indexingBehavior  Controls the indexing behavior. - `disable-indexing`: Data indexing is completely disabled
     */
    public function sync(array $data = [], ?bool $failOnError = null, ?string $indexingBehavior = null): Response
    {
        return $this->connector->send(new Sync($data, $failOnError, $indexingBehavior));
    }
}
