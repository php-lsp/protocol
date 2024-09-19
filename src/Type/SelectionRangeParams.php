<?php

namespace Lsp\Protocol\Type;

/**
 * A parameter literal used in selection range requests.
 *
 * @generated
 */
final class SelectionRangeParams
{
    use WorkDoneProgressParamsMixin;

    use PartialResultParamsMixin;

    /**
     * @param list<Position> $positions
     * @param int<-2147483648, 2147483647>|string|null $workDoneToken
     * @param int<-2147483648, 2147483647>|string|null $partialResultToken
     */
    final public function __construct(
        public readonly TextDocumentIdentifier $textDocument,
        public readonly array $positions,
        int|string|null $workDoneToken = null,
        int|string|null $partialResultToken = null,
    ) {
            $this->workDoneToken = $workDoneToken;
    
            $this->partialResultToken = $partialResultToken;
    }
}