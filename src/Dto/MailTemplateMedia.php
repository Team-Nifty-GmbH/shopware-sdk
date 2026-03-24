<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MailTemplateMedia extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $mailTemplateId = null,
		public ?string $languageId = null,
		public ?string $mediaId = null,
		public ?int $position = null,
		public ?MailTemplate $mailTemplate = null,
		public ?Media $media = null,
	) {
	}
}
