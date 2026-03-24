<?php

namespace TeamNiftyGmbH\Shopware;

use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\PagedPaginator;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use SensitiveParameter;
use TeamNiftyGmbH\Shopware\Resource\AclRole;
use TeamNiftyGmbH\Shopware\Resource\App;
use TeamNiftyGmbH\Shopware\Resource\AppActionButton;
use TeamNiftyGmbH\Shopware\Resource\AppAdministrationSnippet;
use TeamNiftyGmbH\Shopware\Resource\AppCmsBlock;
use TeamNiftyGmbH\Shopware\Resource\AppFlowAction;
use TeamNiftyGmbH\Shopware\Resource\AppFlowEvent;
use TeamNiftyGmbH\Shopware\Resource\AppPaymentMethod;
use TeamNiftyGmbH\Shopware\Resource\AppScriptCondition;
use TeamNiftyGmbH\Shopware\Resource\AppShippingMethod;
use TeamNiftyGmbH\Shopware\Resource\AppSystem;
use TeamNiftyGmbH\Shopware\Resource\AppTemplate;
use TeamNiftyGmbH\Shopware\Resource\AssetManagement;
use TeamNiftyGmbH\Shopware\Resource\AuthorizationAuthentication;
use TeamNiftyGmbH\Shopware\Resource\BulkOperations;
use TeamNiftyGmbH\Shopware\Resource\Category;
use TeamNiftyGmbH\Shopware\Resource\CmsBlock;
use TeamNiftyGmbH\Shopware\Resource\CmsPage;
use TeamNiftyGmbH\Shopware\Resource\CmsSection;
use TeamNiftyGmbH\Shopware\Resource\CmsSlot;
use TeamNiftyGmbH\Shopware\Resource\ConsentManagement;
use TeamNiftyGmbH\Shopware\Resource\Country;
use TeamNiftyGmbH\Shopware\Resource\CountryState;
use TeamNiftyGmbH\Shopware\Resource\Currency;
use TeamNiftyGmbH\Shopware\Resource\CurrencyCountryRounding;
use TeamNiftyGmbH\Shopware\Resource\CustomEntity;
use TeamNiftyGmbH\Shopware\Resource\Customer;
use TeamNiftyGmbH\Shopware\Resource\CustomerAddress;
use TeamNiftyGmbH\Shopware\Resource\CustomerGroup;
use TeamNiftyGmbH\Shopware\Resource\CustomerImpersonation;
use TeamNiftyGmbH\Shopware\Resource\CustomerRecovery;
use TeamNiftyGmbH\Shopware\Resource\CustomerWishlist;
use TeamNiftyGmbH\Shopware\Resource\CustomerWishlistProduct;
use TeamNiftyGmbH\Shopware\Resource\CustomField;
use TeamNiftyGmbH\Shopware\Resource\CustomFieldSet;
use TeamNiftyGmbH\Shopware\Resource\CustomFieldSetRelation;
use TeamNiftyGmbH\Shopware\Resource\DeliveryTime;
use TeamNiftyGmbH\Shopware\Resource\Document;
use TeamNiftyGmbH\Shopware\Resource\DocumentBaseConfig;
use TeamNiftyGmbH\Shopware\Resource\DocumentBaseConfigSalesChannel;
use TeamNiftyGmbH\Shopware\Resource\DocumentManagement;
use TeamNiftyGmbH\Shopware\Resource\DocumentType;
use TeamNiftyGmbH\Shopware\Resource\EmailSupportValidation;
use TeamNiftyGmbH\Shopware\Resource\Experimental;
use TeamNiftyGmbH\Shopware\Resource\Flow;
use TeamNiftyGmbH\Shopware\Resource\FlowSequence;
use TeamNiftyGmbH\Shopware\Resource\FlowTemplate;
use TeamNiftyGmbH\Shopware\Resource\ImportExportFile;
use TeamNiftyGmbH\Shopware\Resource\ImportExportLog;
use TeamNiftyGmbH\Shopware\Resource\ImportExportProfile;
use TeamNiftyGmbH\Shopware\Resource\IncrementStorage;
use TeamNiftyGmbH\Shopware\Resource\Integration;
use TeamNiftyGmbH\Shopware\Resource\LandingPage;
use TeamNiftyGmbH\Shopware\Resource\Language;
use TeamNiftyGmbH\Shopware\Resource\Locale;
use TeamNiftyGmbH\Shopware\Resource\LogEntry;
use TeamNiftyGmbH\Shopware\Resource\MailHeaderFooter;
use TeamNiftyGmbH\Shopware\Resource\MailOperations;
use TeamNiftyGmbH\Shopware\Resource\MailTemplate;
use TeamNiftyGmbH\Shopware\Resource\MailTemplateType;
use TeamNiftyGmbH\Shopware\Resource\MainCategory;
use TeamNiftyGmbH\Shopware\Resource\MeasurementDisplayUnit;
use TeamNiftyGmbH\Shopware\Resource\MeasurementSystem;
use TeamNiftyGmbH\Shopware\Resource\Media;
use TeamNiftyGmbH\Shopware\Resource\MediaDefaultFolder;
use TeamNiftyGmbH\Shopware\Resource\MediaFolder;
use TeamNiftyGmbH\Shopware\Resource\MediaFolderConfiguration;
use TeamNiftyGmbH\Shopware\Resource\MediaThumbnail;
use TeamNiftyGmbH\Shopware\Resource\MediaThumbnailSize;
use TeamNiftyGmbH\Shopware\Resource\NewsletterRecipient;
use TeamNiftyGmbH\Shopware\Resource\Notification;
use TeamNiftyGmbH\Shopware\Resource\NumberRange;
use TeamNiftyGmbH\Shopware\Resource\NumberRangeSalesChannel;
use TeamNiftyGmbH\Shopware\Resource\NumberRangeState;
use TeamNiftyGmbH\Shopware\Resource\NumberRangeType;
use TeamNiftyGmbH\Shopware\Resource\Order;
use TeamNiftyGmbH\Shopware\Resource\OrderAddress;
use TeamNiftyGmbH\Shopware\Resource\OrderCustomer;
use TeamNiftyGmbH\Shopware\Resource\OrderDelivery;
use TeamNiftyGmbH\Shopware\Resource\OrderDeliveryPosition;
use TeamNiftyGmbH\Shopware\Resource\OrderLineItem;
use TeamNiftyGmbH\Shopware\Resource\OrderLineItemDownload;
use TeamNiftyGmbH\Shopware\Resource\OrderManagement;
use TeamNiftyGmbH\Shopware\Resource\OrderTransaction;
use TeamNiftyGmbH\Shopware\Resource\OrderTransactionCapture;
use TeamNiftyGmbH\Shopware\Resource\OrderTransactionCaptureRefund;
use TeamNiftyGmbH\Shopware\Resource\OrderTransactionCaptureRefundPosition;
use TeamNiftyGmbH\Shopware\Resource\PaymentMethod;
use TeamNiftyGmbH\Shopware\Resource\Plugin;
use TeamNiftyGmbH\Shopware\Resource\Product;
use TeamNiftyGmbH\Shopware\Resource\ProductConfiguratorSetting;
use TeamNiftyGmbH\Shopware\Resource\ProductCrossSelling;
use TeamNiftyGmbH\Shopware\Resource\ProductCrossSellingAssignedProducts;
use TeamNiftyGmbH\Shopware\Resource\ProductDownload;
use TeamNiftyGmbH\Shopware\Resource\ProductExport;
use TeamNiftyGmbH\Shopware\Resource\ProductFeatureSet;
use TeamNiftyGmbH\Shopware\Resource\ProductKeywordDictionary;
use TeamNiftyGmbH\Shopware\Resource\ProductManufacturer;
use TeamNiftyGmbH\Shopware\Resource\ProductMedia;
use TeamNiftyGmbH\Shopware\Resource\ProductPrice;
use TeamNiftyGmbH\Shopware\Resource\ProductReview;
use TeamNiftyGmbH\Shopware\Resource\ProductSearchConfig;
use TeamNiftyGmbH\Shopware\Resource\ProductSearchConfigField;
use TeamNiftyGmbH\Shopware\Resource\ProductSearchKeyword;
use TeamNiftyGmbH\Shopware\Resource\ProductSorting;
use TeamNiftyGmbH\Shopware\Resource\ProductStream;
use TeamNiftyGmbH\Shopware\Resource\ProductStreamFilter;
use TeamNiftyGmbH\Shopware\Resource\ProductVisibility;
use TeamNiftyGmbH\Shopware\Resource\Promotion;
use TeamNiftyGmbH\Shopware\Resource\PromotionDiscount;
use TeamNiftyGmbH\Shopware\Resource\PromotionDiscountPrices;
use TeamNiftyGmbH\Shopware\Resource\PromotionIndividualCode;
use TeamNiftyGmbH\Shopware\Resource\PromotionSalesChannel;
use TeamNiftyGmbH\Shopware\Resource\PromotionSetgroup;
use TeamNiftyGmbH\Shopware\Resource\PropertyGroup;
use TeamNiftyGmbH\Shopware\Resource\PropertyGroupOption;
use TeamNiftyGmbH\Shopware\Resource\Rule;
use TeamNiftyGmbH\Shopware\Resource\RuleCondition;
use TeamNiftyGmbH\Shopware\Resource\SalesChannel;
use TeamNiftyGmbH\Shopware\Resource\SalesChannelAnalytics;
use TeamNiftyGmbH\Shopware\Resource\SalesChannelDomain;
use TeamNiftyGmbH\Shopware\Resource\SalesChannelType;
use TeamNiftyGmbH\Shopware\Resource\Salutation;
use TeamNiftyGmbH\Shopware\Resource\ScheduledTask;
use TeamNiftyGmbH\Shopware\Resource\Script;
use TeamNiftyGmbH\Shopware\Resource\SeoUrl;
use TeamNiftyGmbH\Shopware\Resource\SeoUrlTemplate;
use TeamNiftyGmbH\Shopware\Resource\ShippingMethod;
use TeamNiftyGmbH\Shopware\Resource\ShippingMethodPrice;
use TeamNiftyGmbH\Shopware\Resource\Snippet;
use TeamNiftyGmbH\Shopware\Resource\SnippetSet;
use TeamNiftyGmbH\Shopware\Resource\StateMachine;
use TeamNiftyGmbH\Shopware\Resource\StateMachineHistory;
use TeamNiftyGmbH\Shopware\Resource\StateMachineState;
use TeamNiftyGmbH\Shopware\Resource\StateMachineTransition;
use TeamNiftyGmbH\Shopware\Resource\SystemConfig;
use TeamNiftyGmbH\Shopware\Resource\SystemInfoHealthCheck;
use TeamNiftyGmbH\Shopware\Resource\SystemOperations;
use TeamNiftyGmbH\Shopware\Resource\Tag;
use TeamNiftyGmbH\Shopware\Resource\Tax;
use TeamNiftyGmbH\Shopware\Resource\TaxProvider;
use TeamNiftyGmbH\Shopware\Resource\TaxRule;
use TeamNiftyGmbH\Shopware\Resource\TaxRuleType;
use TeamNiftyGmbH\Shopware\Resource\Theme;
use TeamNiftyGmbH\Shopware\Resource\Unit;
use TeamNiftyGmbH\Shopware\Resource\User;
use TeamNiftyGmbH\Shopware\Resource\UserAccessKey;
use TeamNiftyGmbH\Shopware\Resource\UserConfig;
use TeamNiftyGmbH\Shopware\Resource\UserRecovery;
use TeamNiftyGmbH\Shopware\Resource\Webhook;
use TeamNiftyGmbH\Shopware\Resource\WebhookEventLog;

/**
 * Shopware Admin API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.
 *
 * For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints
 * add the query parameter `type=jsonapi`.
 */
class Shopware extends Connector implements HasPagination
{
    use ClientCredentialsGrant;

    /**
     * @param  string  $baseUrl  The base URL of the Shopware API (e.g. https://shop.example.com/api)
     * @param  null|string  $tokenUrl  Defaults to {baseUrl}/oauth/token
     */
    public function __construct(
        protected string $baseUrl,
        #[SensitiveParameter]
        protected string $clientId,
        #[SensitiveParameter]
        protected string $clientSecret,
        protected ?string $tokenUrl = null,
        protected ?string $refreshUrl = null,
        protected ?array $scopes = ['write' => 'Full write access'],
    ) {
        $this->baseUrl = rtrim($this->baseUrl, '/');
        $this->tokenUrl ??= $this->baseUrl . '/oauth/token';
    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId($this->clientId)
            ->setClientSecret($this->clientSecret)
            ->setDefaultScopes($this->scopes)
            ->setTokenEndpoint($this->tokenUrl);
    }

    public function aclRole(): AclRole
    {
        return new AclRole($this);
    }

    public function app(): App
    {
        return new App($this);
    }

    public function appActionButton(): AppActionButton
    {
        return new AppActionButton($this);
    }

    public function appAdministrationSnippet(): AppAdministrationSnippet
    {
        return new AppAdministrationSnippet($this);
    }

    public function appCmsBlock(): AppCmsBlock
    {
        return new AppCmsBlock($this);
    }

    public function appFlowAction(): AppFlowAction
    {
        return new AppFlowAction($this);
    }

    public function appFlowEvent(): AppFlowEvent
    {
        return new AppFlowEvent($this);
    }

    public function appPaymentMethod(): AppPaymentMethod
    {
        return new AppPaymentMethod($this);
    }

    public function appScriptCondition(): AppScriptCondition
    {
        return new AppScriptCondition($this);
    }

    public function appShippingMethod(): AppShippingMethod
    {
        return new AppShippingMethod($this);
    }

    public function appSystem(): AppSystem
    {
        return new AppSystem($this);
    }

    public function appTemplate(): AppTemplate
    {
        return new AppTemplate($this);
    }

    public function assetManagement(): AssetManagement
    {
        return new AssetManagement($this);
    }

    public function authorizationAuthentication(): AuthorizationAuthentication
    {
        return new AuthorizationAuthentication($this);
    }

    public function bulkOperations(): BulkOperations
    {
        return new BulkOperations($this);
    }

    public function category(): Category
    {
        return new Category($this);
    }

    public function cmsBlock(): CmsBlock
    {
        return new CmsBlock($this);
    }

    public function cmsPage(): CmsPage
    {
        return new CmsPage($this);
    }

    public function cmsSection(): CmsSection
    {
        return new CmsSection($this);
    }

    public function cmsSlot(): CmsSlot
    {
        return new CmsSlot($this);
    }

    public function consentManagement(): ConsentManagement
    {
        return new ConsentManagement($this);
    }

    public function country(): Country
    {
        return new Country($this);
    }

    public function countryState(): CountryState
    {
        return new CountryState($this);
    }

    public function currency(): Currency
    {
        return new Currency($this);
    }

    public function currencyCountryRounding(): CurrencyCountryRounding
    {
        return new CurrencyCountryRounding($this);
    }

    public function customEntity(): CustomEntity
    {
        return new CustomEntity($this);
    }

    public function customField(): CustomField
    {
        return new CustomField($this);
    }

    public function customFieldSet(): CustomFieldSet
    {
        return new CustomFieldSet($this);
    }

    public function customFieldSetRelation(): CustomFieldSetRelation
    {
        return new CustomFieldSetRelation($this);
    }

    public function customer(): Customer
    {
        return new Customer($this);
    }

    public function customerAddress(): CustomerAddress
    {
        return new CustomerAddress($this);
    }

    public function customerGroup(): CustomerGroup
    {
        return new CustomerGroup($this);
    }

    public function customerImpersonation(): CustomerImpersonation
    {
        return new CustomerImpersonation($this);
    }

    public function customerRecovery(): CustomerRecovery
    {
        return new CustomerRecovery($this);
    }

    public function customerWishlist(): CustomerWishlist
    {
        return new CustomerWishlist($this);
    }

    public function customerWishlistProduct(): CustomerWishlistProduct
    {
        return new CustomerWishlistProduct($this);
    }

    public function deliveryTime(): DeliveryTime
    {
        return new DeliveryTime($this);
    }

    public function document(): Document
    {
        return new Document($this);
    }

    public function documentBaseConfig(): DocumentBaseConfig
    {
        return new DocumentBaseConfig($this);
    }

    public function documentBaseConfigSalesChannel(): DocumentBaseConfigSalesChannel
    {
        return new DocumentBaseConfigSalesChannel($this);
    }

    public function documentManagement(): DocumentManagement
    {
        return new DocumentManagement($this);
    }

    public function documentType(): DocumentType
    {
        return new DocumentType($this);
    }

    public function emailSupportValidation(): EmailSupportValidation
    {
        return new EmailSupportValidation($this);
    }

    public function experimental(): Experimental
    {
        return new Experimental($this);
    }

    public function flow(): Flow
    {
        return new Flow($this);
    }

    public function flowSequence(): FlowSequence
    {
        return new FlowSequence($this);
    }

    public function flowTemplate(): FlowTemplate
    {
        return new FlowTemplate($this);
    }

    public function importExportFile(): ImportExportFile
    {
        return new ImportExportFile($this);
    }

    public function importExportLog(): ImportExportLog
    {
        return new ImportExportLog($this);
    }

    public function importExportProfile(): ImportExportProfile
    {
        return new ImportExportProfile($this);
    }

    public function incrementStorage(): IncrementStorage
    {
        return new IncrementStorage($this);
    }

    public function integration(): Integration
    {
        return new Integration($this);
    }

    public function landingPage(): LandingPage
    {
        return new LandingPage($this);
    }

    public function language(): Language
    {
        return new Language($this);
    }

    public function locale(): Locale
    {
        return new Locale($this);
    }

    public function logEntry(): LogEntry
    {
        return new LogEntry($this);
    }

    public function mailHeaderFooter(): MailHeaderFooter
    {
        return new MailHeaderFooter($this);
    }

    public function mailOperations(): MailOperations
    {
        return new MailOperations($this);
    }

    public function mailTemplate(): MailTemplate
    {
        return new MailTemplate($this);
    }

    public function mailTemplateType(): MailTemplateType
    {
        return new MailTemplateType($this);
    }

    public function mainCategory(): MainCategory
    {
        return new MainCategory($this);
    }

    public function measurementDisplayUnit(): MeasurementDisplayUnit
    {
        return new MeasurementDisplayUnit($this);
    }

    public function measurementSystem(): MeasurementSystem
    {
        return new MeasurementSystem($this);
    }

    public function media(): Media
    {
        return new Media($this);
    }

    public function mediaDefaultFolder(): MediaDefaultFolder
    {
        return new MediaDefaultFolder($this);
    }

    public function mediaFolder(): MediaFolder
    {
        return new MediaFolder($this);
    }

    public function mediaFolderConfiguration(): MediaFolderConfiguration
    {
        return new MediaFolderConfiguration($this);
    }

    public function mediaThumbnail(): MediaThumbnail
    {
        return new MediaThumbnail($this);
    }

    public function mediaThumbnailSize(): MediaThumbnailSize
    {
        return new MediaThumbnailSize($this);
    }

    public function newsletterRecipient(): NewsletterRecipient
    {
        return new NewsletterRecipient($this);
    }

    public function notification(): Notification
    {
        return new Notification($this);
    }

    public function numberRange(): NumberRange
    {
        return new NumberRange($this);
    }

    public function numberRangeSalesChannel(): NumberRangeSalesChannel
    {
        return new NumberRangeSalesChannel($this);
    }

    public function numberRangeState(): NumberRangeState
    {
        return new NumberRangeState($this);
    }

    public function numberRangeType(): NumberRangeType
    {
        return new NumberRangeType($this);
    }

    public function order(): Order
    {
        return new Order($this);
    }

    public function orderAddress(): OrderAddress
    {
        return new OrderAddress($this);
    }

    public function orderCustomer(): OrderCustomer
    {
        return new OrderCustomer($this);
    }

    public function orderDelivery(): OrderDelivery
    {
        return new OrderDelivery($this);
    }

    public function orderDeliveryPosition(): OrderDeliveryPosition
    {
        return new OrderDeliveryPosition($this);
    }

    public function orderLineItem(): OrderLineItem
    {
        return new OrderLineItem($this);
    }

    public function orderLineItemDownload(): OrderLineItemDownload
    {
        return new OrderLineItemDownload($this);
    }

    public function orderManagement(): OrderManagement
    {
        return new OrderManagement($this);
    }

    public function orderTransaction(): OrderTransaction
    {
        return new OrderTransaction($this);
    }

    public function orderTransactionCapture(): OrderTransactionCapture
    {
        return new OrderTransactionCapture($this);
    }

    public function orderTransactionCaptureRefund(): OrderTransactionCaptureRefund
    {
        return new OrderTransactionCaptureRefund($this);
    }

    public function orderTransactionCaptureRefundPosition(): OrderTransactionCaptureRefundPosition
    {
        return new OrderTransactionCaptureRefundPosition($this);
    }

    public function paymentMethod(): PaymentMethod
    {
        return new PaymentMethod($this);
    }

    public function plugin(): Plugin
    {
        return new Plugin($this);
    }

    public function product(): Product
    {
        return new Product($this);
    }

    public function productConfiguratorSetting(): ProductConfiguratorSetting
    {
        return new ProductConfiguratorSetting($this);
    }

    public function productCrossSelling(): ProductCrossSelling
    {
        return new ProductCrossSelling($this);
    }

    public function productCrossSellingAssignedProducts(): ProductCrossSellingAssignedProducts
    {
        return new ProductCrossSellingAssignedProducts($this);
    }

    public function productDownload(): ProductDownload
    {
        return new ProductDownload($this);
    }

    public function productExport(): ProductExport
    {
        return new ProductExport($this);
    }

    public function productFeatureSet(): ProductFeatureSet
    {
        return new ProductFeatureSet($this);
    }

    public function productKeywordDictionary(): ProductKeywordDictionary
    {
        return new ProductKeywordDictionary($this);
    }

    public function productManufacturer(): ProductManufacturer
    {
        return new ProductManufacturer($this);
    }

    public function productMedia(): ProductMedia
    {
        return new ProductMedia($this);
    }

    public function productPrice(): ProductPrice
    {
        return new ProductPrice($this);
    }

    public function productReview(): ProductReview
    {
        return new ProductReview($this);
    }

    public function productSearchConfig(): ProductSearchConfig
    {
        return new ProductSearchConfig($this);
    }

    public function productSearchConfigField(): ProductSearchConfigField
    {
        return new ProductSearchConfigField($this);
    }

    public function productSearchKeyword(): ProductSearchKeyword
    {
        return new ProductSearchKeyword($this);
    }

    public function productSorting(): ProductSorting
    {
        return new ProductSorting($this);
    }

    public function productStream(): ProductStream
    {
        return new ProductStream($this);
    }

    public function productStreamFilter(): ProductStreamFilter
    {
        return new ProductStreamFilter($this);
    }

    public function productVisibility(): ProductVisibility
    {
        return new ProductVisibility($this);
    }

    public function promotion(): Promotion
    {
        return new Promotion($this);
    }

    public function promotionDiscount(): PromotionDiscount
    {
        return new PromotionDiscount($this);
    }

    public function promotionDiscountPrices(): PromotionDiscountPrices
    {
        return new PromotionDiscountPrices($this);
    }

    public function promotionIndividualCode(): PromotionIndividualCode
    {
        return new PromotionIndividualCode($this);
    }

    public function promotionSalesChannel(): PromotionSalesChannel
    {
        return new PromotionSalesChannel($this);
    }

    public function promotionSetgroup(): PromotionSetgroup
    {
        return new PromotionSetgroup($this);
    }

    public function propertyGroup(): PropertyGroup
    {
        return new PropertyGroup($this);
    }

    public function propertyGroupOption(): PropertyGroupOption
    {
        return new PropertyGroupOption($this);
    }

    public function rule(): Rule
    {
        return new Rule($this);
    }

    public function ruleCondition(): RuleCondition
    {
        return new RuleCondition($this);
    }

    public function salesChannel(): SalesChannel
    {
        return new SalesChannel($this);
    }

    public function salesChannelAnalytics(): SalesChannelAnalytics
    {
        return new SalesChannelAnalytics($this);
    }

    public function salesChannelDomain(): SalesChannelDomain
    {
        return new SalesChannelDomain($this);
    }

    public function salesChannelType(): SalesChannelType
    {
        return new SalesChannelType($this);
    }

    public function salutation(): Salutation
    {
        return new Salutation($this);
    }

    public function scheduledTask(): ScheduledTask
    {
        return new ScheduledTask($this);
    }

    public function script(): Script
    {
        return new Script($this);
    }

    public function seoUrl(): SeoUrl
    {
        return new SeoUrl($this);
    }

    public function seoUrlTemplate(): SeoUrlTemplate
    {
        return new SeoUrlTemplate($this);
    }

    public function shippingMethod(): ShippingMethod
    {
        return new ShippingMethod($this);
    }

    public function shippingMethodPrice(): ShippingMethodPrice
    {
        return new ShippingMethodPrice($this);
    }

    public function snippet(): Snippet
    {
        return new Snippet($this);
    }

    public function snippetSet(): SnippetSet
    {
        return new SnippetSet($this);
    }

    public function stateMachine(): StateMachine
    {
        return new StateMachine($this);
    }

    public function stateMachineHistory(): StateMachineHistory
    {
        return new StateMachineHistory($this);
    }

    public function stateMachineState(): StateMachineState
    {
        return new StateMachineState($this);
    }

    public function stateMachineTransition(): StateMachineTransition
    {
        return new StateMachineTransition($this);
    }

    public function systemConfig(): SystemConfig
    {
        return new SystemConfig($this);
    }

    public function systemInfoHealthCheck(): SystemInfoHealthCheck
    {
        return new SystemInfoHealthCheck($this);
    }

    public function systemOperations(): SystemOperations
    {
        return new SystemOperations($this);
    }

    public function tag(): Tag
    {
        return new Tag($this);
    }

    public function tax(): Tax
    {
        return new Tax($this);
    }

    public function taxProvider(): TaxProvider
    {
        return new TaxProvider($this);
    }

    public function taxRule(): TaxRule
    {
        return new TaxRule($this);
    }

    public function taxRuleType(): TaxRuleType
    {
        return new TaxRuleType($this);
    }

    public function theme(): Theme
    {
        return new Theme($this);
    }

    public function unit(): Unit
    {
        return new Unit($this);
    }

    public function user(): User
    {
        return new User($this);
    }

    public function userAccessKey(): UserAccessKey
    {
        return new UserAccessKey($this);
    }

    public function userConfig(): UserConfig
    {
        return new UserConfig($this);
    }

    public function userRecovery(): UserRecovery
    {
        return new UserRecovery($this);
    }

    public function webhook(): Webhook
    {
        return new Webhook($this);
    }

    public function webhookEventLog(): WebhookEventLog
    {
        return new WebhookEventLog($this);
    }

    public function paginate(Request $request): PagedPaginator
    {
        return new class(connector: $this, request: $request) extends PagedPaginator
        {
            protected function isLastPage(Response $response): bool
            {
                $total = $response->json('total');
                $limit = $response->json('limit') ?? 25;
                $page = $response->json('page') ?? 1;

                return ($page * $limit) >= $total;
            }

            protected function getPageItems(Response $response, Request $request): array
            {
                return $response->json('data') ?? [];
            }

            protected function applyPagination(Request $request): Request
            {
                $request->query()->add('page', $this->currentPage);

                return $request;
            }
        };
    }
}
