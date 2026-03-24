<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * An external thumbnail URL with its dimensions. Used when a CDN provides pre-generated thumbnails
 * alongside the main media file.
 */
class ExternalThumbnail extends SpatieData
{
	public function __construct(
		public ?string $url = null,
		public ?int $width = null,
		public ?int $height = null,
	) {
	}
}
