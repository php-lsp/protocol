<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @generated 2024-09-21
 */
final class WorkspaceSymbolClientCapabilitiesTagSupport
{
    public function __construct(
        /**
         * The tags supported by the client.
         *
         * @var list<SymbolTag>
         */
        public readonly array $valueSet = [],
    ) {}
}