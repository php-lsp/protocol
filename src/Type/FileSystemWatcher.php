<?php

namespace Lsp\Protocol\Type;

/**
 * @generated
 */
final class FileSystemWatcher
{
    /**
     * @generated
     */
    final public function __construct(
        public readonly string|RelativePattern $globPattern,
        public readonly WatchKind $kind,
    ) {}
}
