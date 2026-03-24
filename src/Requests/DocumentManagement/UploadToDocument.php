<?php

namespace TeamNiftyGmbH\Shopware\Requests\DocumentManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * uploadToDocument
 *
 * Uploads a file for a document. This prevents the document from being dynamically generated and
 * delivers the uploaded file instead, when the document is downloaded.
 *
 * Note:
 * * The document is
 * required to be `static`
 * * A document can only have one media file
 *
 * The are two methods of providing
 * a file to this route:
 *  * Use a typical file upload and provide the file in the request
 *  * Fetch the
 * file from an url. This only works if the `shopware.media.enable_url_upload_feature` variable is set
 * to true in the shop environment.
 * To use file upload via url, the content type has to be
 * `application/json` and the parameter `url` has to be provided.
 */
class UploadToDocument extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/document/{$this->documentId}/upload";
	}


	/**
	 * @param string $documentId Identifier of the document the new file should be added to.
	 * @param string $fileName Name of the uploaded file.
	 * @param string $extension Extension of the uploaded file. For example `pdf`
	 */
	public function __construct(
		protected string $documentId,
		protected string $fileName,
		protected string $extension,
		protected array $data = [],
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['fileName' => $this->fileName, 'extension' => $this->extension]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
