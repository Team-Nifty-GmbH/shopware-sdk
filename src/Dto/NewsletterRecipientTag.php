<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class NewsletterRecipientTag extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $newsletterRecipientId = null,
		public ?string $tagId = null,
		public ?NewsletterRecipient $newsletterRecipient = null,
		public ?Tag $tag = null,
	) {
	}
}
