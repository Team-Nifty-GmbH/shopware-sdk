<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\DocumentManagement\CreateDocuments;
use TeamNiftyGmbH\Shopware\Requests\DocumentManagement\DownloadDocument;
use TeamNiftyGmbH\Shopware\Requests\DocumentManagement\DownloadDocuments;
use TeamNiftyGmbH\Shopware\Requests\DocumentManagement\NumberRangeReserve;
use TeamNiftyGmbH\Shopware\Requests\DocumentManagement\UploadToDocument;

class DocumentManagement extends BaseResource
{
    /**
     * @param  string  $documentTypeName  The type of document to create
     */
    public function createDocuments(string $documentTypeName, array $data): Response
    {
        return $this->connector->send(new CreateDocuments($documentTypeName, $data));
    }

    /**
     * @param  string  $documentId  Identifier of the document to be downloaded.
     * @param  string  $deepLinkCode  A unique hash code which was generated when the document was created.
     * @param  null|bool  $download  This parameter controls the `Content-Disposition` header. If set to `true` the header will be set to `attachment` else `inline`.
     */
    public function downloadDocument(string $documentId, string $deepLinkCode, ?bool $download = null): Response
    {
        return $this->connector->send(new DownloadDocument($documentId, $deepLinkCode, $download));
    }

    public function downloadDocuments(array $data = []): Response
    {
        return $this->connector->send(new DownloadDocuments($data));
    }

    /**
     * @param  string  $type  `technicalName` of the document type (e.g. `document_invoice`). Available types can be fetched with the `/api/document-type endpoint`.
     * @param  string  $saleschannel  Sales channel for the number range. Number ranges can be defined per sales channel, so you can pass a sales channel ID here.
     * @param  null|bool  $preview  If this parameter has a true value, the number will not actually be incremented, but only previewed.
     */
    public function numberRangeReserve(string $type, string $saleschannel, ?bool $preview = null): Response
    {
        return $this->connector->send(new NumberRangeReserve($type, $saleschannel, $preview));
    }

    /**
     * @param  string  $documentId  Identifier of the document the new file should be added to.
     * @param  string  $fileName  Name of the uploaded file.
     * @param  string  $extension  Extension of the uploaded file. For example `pdf`
     */
    public function uploadToDocument(string $documentId, string $fileName, string $extension, array $data = []): Response
    {
        return $this->connector->send(new UploadToDocument($documentId, $fileName, $extension, $data));
    }
}
