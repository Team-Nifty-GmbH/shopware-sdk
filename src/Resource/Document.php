<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Document\AggregateDocument;
use TeamNiftyGmbH\Shopware\Requests\Document\CreateDocument;
use TeamNiftyGmbH\Shopware\Requests\Document\DeleteDocument;
use TeamNiftyGmbH\Shopware\Requests\Document\GetDocument;
use TeamNiftyGmbH\Shopware\Requests\Document\GetDocumentList;
use TeamNiftyGmbH\Shopware\Requests\Document\SearchDocument;
use TeamNiftyGmbH\Shopware\Requests\Document\UpdateDocument;

class Document extends BaseResource
{
    public function aggregateDocument(array $data = []): Response
    {
        return $this->connector->send(new AggregateDocument($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createDocument(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateDocument($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the document
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteDocument(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteDocument($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the document
     */
    public function getDocument(string $id): Response
    {
        return $this->connector->send(new GetDocument($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getDocumentList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetDocumentList($limit, $page, $swQuery));
    }

    public function searchDocument(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchDocument($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the document
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateDocument(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateDocument($id, $data, $response));
    }
}
