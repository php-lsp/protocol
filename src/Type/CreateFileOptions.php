<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * Options to create a file.
 *
 * @generated 2024-09-21
 */
final class CreateFileOptions
{
    public function __construct(
        /**
         * Overwrite existing file. Overwrite wins over `ignoreIfExists`.
         */
        public readonly ?bool $overwrite = null,
        /**
         * Ignore if exists.
         */
        public readonly ?bool $ignoreIfExists = null,
    ) {}
}
