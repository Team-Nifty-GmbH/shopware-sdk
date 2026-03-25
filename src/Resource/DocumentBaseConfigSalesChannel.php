<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel\AggregateDocumentBaseConfigSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel\CreateDocumentBaseConfigSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel\DeleteDocumentBaseConfigSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel\GetDocumentBaseConfigSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel\GetDocumentBaseConfigSalesChannelList;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel\SearchDocumentBaseConfigSalesChannel;
use TeamNiftyGmbH\Shopware\Requests\DocumentBaseConfigSalesChannel\UpdateDocumentBaseConfigSalesChannel;

class DocumentBaseConfigSalesChannel extends BaseResource
{
    public function aggregateDocumentBaseConfigSalesChannel(array $data = []): Response
    {
        return $this->connector->send(new AggregateDocumentBaseConfigSalesChannel($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createDocumentBaseConfigSalesChannel(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateDocumentBaseConfigSalesChannel($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the document_base_config_sales_channel
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteDocumentBaseConfigSalesChannel(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteDocumentBaseConfigSalesChannel($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the document_base_config_sales_channel
     */
    public function getDocumentBaseConfigSalesChannel(string $id): Response
    {
        return $this->connector->send(new GetDocumentBaseConfigSalesChannel($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getDocumentBaseConfigSalesChannelList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetDocumentBaseConfigSalesChannelList($limit, $page, $swQuery));
    }

    public function searchDocumentBaseConfigSalesChannel(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchDocumentBaseConfigSalesChannel($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the document_base_config_sales_channel
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateDocumentBaseConfigSalesChannel(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateDocumentBaseConfigSalesChannel($id, $data, $response));
    }
}
