<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * Represents information on a file/folder create.
 *
 * @since 3.16.0
 */
final class FileCreate
{
    public function __construct(
        /**
         * A file:// URI for the location of the file/folder being created.
         */
        public readonly string $uri,
    ) {}
}
