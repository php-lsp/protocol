<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * The workspace folder change event.
 */
final class WorkspaceFoldersChangeEvent
{
    public function __construct(
        /**
         * The array of added workspace folders.
         *
         * @var list<WorkspaceFolder>
         */
        public readonly array $added = [],
        /**
         * The array of the removed workspace folders.
         *
         * @var list<WorkspaceFolder>
         */
        public readonly array $removed = [],
    ) {}
}
