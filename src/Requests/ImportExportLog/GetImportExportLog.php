<?php

namespace TeamNiftyGmbH\Shopware\Requests\ImportExportLog;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ImportExportLog;

/**
 * getImportExportLog
 *
 * Available since: 6.0.0.0
 */
class GetImportExportLog extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/import-export-log/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the import_export_log
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ImportExportLog::from($response->json('data'));
    }
}
