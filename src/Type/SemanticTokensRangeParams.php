<?php

namespace Lsp\Protocol\Type;

/**
 * @generated
 * @since 3.16.0
 */
final class SemanticTokensRangeParams
{
    use WorkDoneProgressParamsMixin;

    use PartialResultParamsMixin;

    /**
     * @param int<-2147483648, 2147483647>|string $workDoneToken
     * @param int<-2147483648, 2147483647>|string $partialResultToken
     */
    final public function __construct(
        public readonly TextDocumentIdentifier $textDocument,
        public readonly Range $range,
        int|string $workDoneToken,
        int|string $partialResultToken,
    ) {
        $this->workDoneToken = $workDoneToken;

        $this->partialResultToken = $partialResultToken;
    }
}
