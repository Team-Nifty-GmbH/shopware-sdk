<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MailTemplate\AggregateMailTemplate;
use TeamNiftyGmbH\Shopware\Requests\MailTemplate\CreateMailTemplate;
use TeamNiftyGmbH\Shopware\Requests\MailTemplate\DeleteMailTemplate;
use TeamNiftyGmbH\Shopware\Requests\MailTemplate\GetMailTemplate;
use TeamNiftyGmbH\Shopware\Requests\MailTemplate\GetMailTemplateList;
use TeamNiftyGmbH\Shopware\Requests\MailTemplate\SearchMailTemplate;
use TeamNiftyGmbH\Shopware\Requests\MailTemplate\UpdateMailTemplate;

class MailTemplate extends BaseResource
{
    public function aggregateMailTemplate(array $data = []): Response
    {
        return $this->connector->send(new AggregateMailTemplate($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createMailTemplate(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateMailTemplate($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the mail_template
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteMailTemplate(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteMailTemplate($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the mail_template
     */
    public function getMailTemplate(string $id): Response
    {
        return $this->connector->send(new GetMailTemplate($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getMailTemplateList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetMailTemplateList($limit, $page, $swQuery));
    }

    public function searchMailTemplate(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchMailTemplate($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the mail_template
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateMailTemplate(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateMailTemplate($id, $data, $response));
    }
}
