<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.0.0
 */
class LandingPageTag extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $landingPageId = null,
		public ?string $landingPageVersionId = null,
		public ?string $tagId = null,
		public ?LandingPage $landingPage = null,
		public ?Tag $tag = null,
	) {
	}
}
