<?php

namespace Lsp\Protocol\Type;

/**
 * @generated
 * @since 3.16.0
 */
final class SemanticTokensParams
{
    use WorkDoneProgressParamsMixin;

    use PartialResultParamsMixin;

    /**
     * @generated
     * @since 3.16.0
     */
    final public function __construct(
        public readonly TextDocumentIdentifier $textDocument,
        int|string $workDoneToken,
        int|string $partialResultToken,
    ) {
        $this->workDoneToken = $workDoneToken;

        $this->partialResultToken = $partialResultToken;
    }
}
