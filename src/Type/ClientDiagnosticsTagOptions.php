<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @since 3.18.0
 */
final class ClientDiagnosticsTagOptions
{
    public function __construct(
        /**
         * The tags supported by the client.
         *
         * @var list<DiagnosticTag>
         */
        public readonly array $valueSet = [],
    ) {}
}
