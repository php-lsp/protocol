<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * Parameters for a {@link DocumentSymbolRequest}.
 */
final class DocumentSymbolParams
{
    public function __construct(
        /**
         * The text document.
         */
        public readonly TextDocumentIdentifier $textDocument,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int<-2147483648, 2147483647>|string|null
         */
        public readonly int|string|null $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results
         * (e.g. streaming) to the client.
         *
         * @var int<-2147483648, 2147483647>|string|null
         */
        public readonly int|string|null $partialResultToken = null,
    ) {}
}
