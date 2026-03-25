<?php

namespace TeamNiftyGmbH\Shopware\Requests\MediaUpload;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasStringBody;

class UploadMediaFile extends Request implements HasBody
{
    use HasStringBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $mediaId,
        protected string $fileName,
        protected string $extension,
        protected string $fileContent,
        protected string $mimeType = 'application/octet-stream',
    ) {}

    public function resolveEndpoint(): string
    {
        return "/_action/media/{$this->mediaId}/upload";
    }

    public function defaultQuery(): array
    {
        return [
            'extension' => $this->extension,
            'fileName' => $this->fileName,
        ];
    }

    public function defaultHeaders(): array
    {
        return [
            'Content-Type' => $this->mimeType,
        ];
    }

    protected function defaultBody(): string
    {
        return $this->fileContent;
    }
}
