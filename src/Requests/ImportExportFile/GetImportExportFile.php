<?php

namespace TeamNiftyGmbH\Shopware\Requests\ImportExportFile;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ImportExportFile;

/**
 * getImportExportFile
 *
 * Available since: 6.0.0.0
 */
class GetImportExportFile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/import-export-file/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the import_export_file
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ImportExportFile::from($response->json('data'));
    }
}
