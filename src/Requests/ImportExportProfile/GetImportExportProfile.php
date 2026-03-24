<?php

namespace TeamNiftyGmbH\Shopware\Requests\ImportExportProfile;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ImportExportProfile;

/**
 * getImportExportProfile
 *
 * Available since: 6.0.0.0
 */
class GetImportExportProfile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/import-export-profile/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the import_export_profile
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ImportExportProfile::from($response->json('data'));
    }
}
