<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @since 3.18.0
 *
 * @deprecated use MarkupContent instead
 */
final class MarkedStringWithLanguage
{
    public function __construct(
        public readonly string $language,
        public readonly string $value,
    ) {}
}
