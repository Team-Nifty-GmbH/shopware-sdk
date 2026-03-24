<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class MediaAiTag extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $mediaId = null,
		public ?string $needsAnalysis = null,
		public ?string $tag = null,
		public ?object $translated = null,
	) {
	}
}
