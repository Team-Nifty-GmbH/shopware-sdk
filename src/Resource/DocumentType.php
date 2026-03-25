<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\DocumentType\AggregateDocumentType;
use TeamNiftyGmbH\Shopware\Requests\DocumentType\CreateDocumentType;
use TeamNiftyGmbH\Shopware\Requests\DocumentType\DeleteDocumentType;
use TeamNiftyGmbH\Shopware\Requests\DocumentType\GetDocumentType;
use TeamNiftyGmbH\Shopware\Requests\DocumentType\GetDocumentTypeList;
use TeamNiftyGmbH\Shopware\Requests\DocumentType\SearchDocumentType;
use TeamNiftyGmbH\Shopware\Requests\DocumentType\UpdateDocumentType;

class DocumentType extends BaseResource
{
    public function aggregateDocumentType(array $data = []): Response
    {
        return $this->connector->send(new AggregateDocumentType($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createDocumentType(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateDocumentType($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the document_type
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteDocumentType(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteDocumentType($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the document_type
     */
    public function getDocumentType(string $id): Response
    {
        return $this->connector->send(new GetDocumentType($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getDocumentTypeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetDocumentTypeList($limit, $page, $swQuery));
    }

    public function searchDocumentType(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchDocumentType($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the document_type
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateDocumentType(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateDocumentType($id, $data, $response));
    }
}
