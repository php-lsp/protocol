<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * The parameters sent in a close text document notification.
 *
 * @generated 2024-09-21
 */
final class DidCloseTextDocumentParams
{
    public function __construct(
        /**
         * The document that was closed.
         */
        public readonly TextDocumentIdentifier $textDocument,
    ) {}
}