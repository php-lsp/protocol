<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * A notebook document filter where `pattern` is required field.
 *
 * @since 3.18.0
 */
final class NotebookDocumentFilterPattern
{
    public function __construct(
        /**
         * A glob pattern.
         */
        public readonly RelativePattern|string $pattern,
        /**
         * The type of the enclosing notebook.
         */
        public readonly ?string $notebookType = null,
        /**
         * A Uri {@see Uri::$scheme scheme}, like `file` or `untitled`.
         */
        public readonly ?string $scheme = null,
    ) {}
}
