<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Category extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $parentId = null,
        public ?string $parentVersionId = null,
        public ?string $afterCategoryId = null,
        public ?string $afterCategoryVersionId = null,
        public ?string $mediaId = null,
        public ?bool $displayNestedProducts = null,
        public ?int $autoIncrement = null,
        public ?array $breadcrumb = null,
        public ?int $level = null,
        public ?string $path = null,
        public ?int $childCount = null,
        public ?string $type = null,
        public ?string $productAssignmentType = null,
        public ?bool $visible = null,
        public ?bool $active = null,
        public ?bool $cmsPageIdSwitched = null,
        public ?int $visibleChildCount = null,
        public ?string $name = null,
        public ?object $customFields = null,
        public ?object $slotConfig = null,
        public ?string $linkType = null,
        public ?string $internalLink = null,
        public ?string $externalLink = null,
        public ?bool $linkNewTab = null,
        public ?string $description = null,
        public ?string $metaTitle = null,
        public ?string $metaDescription = null,
        public ?string $keywords = null,
        public ?string $cmsPageId = null,
        public ?string $cmsPageVersionId = null,
        public ?string $productStreamId = null,
        public ?string $customEntityTypeId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?Category $parent = null,
        public ?array $children = null,
        public ?Media $media = null,
        public ?array $products = null,
        public ?array $nestedProducts = null,
        public ?array $tags = null,
        public ?CmsPage $cmsPage = null,
        public ?ProductStream $productStream = null,
        public ?array $navigationSalesChannels = null,
        public ?array $footerSalesChannels = null,
        public ?array $serviceSalesChannels = null,
        public ?array $mainCategories = null,
        public ?array $seoUrls = null,
    ) {}
}
