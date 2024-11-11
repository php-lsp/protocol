<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * Represents information on a file/folder delete.
 *
 * @since 3.16.0
 *
 * @generated 2024-09-21
 */
final class FileDelete
{
    public function __construct(
        /**
         * A file:// URI for the location of the file/folder being deleted.
         */
        public readonly string $uri,
    ) {}
}
