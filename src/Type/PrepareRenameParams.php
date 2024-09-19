<?php

namespace Lsp\Protocol\Type;

/**
 * @generated
 */
final class PrepareRenameParams
{
    use WorkDoneProgressParamsMixin;

    use TextDocumentPositionParamsMixin;

    /**
     * @param int<-2147483648, 2147483647>|string|null $workDoneToken
     */
    final public function __construct(TextDocumentIdentifier $textDocument, Position $position, int|string|null $workDoneToken = null)
    {
            $this->textDocument = $textDocument;
    
            $this->position = $position;
    
            $this->workDoneToken = $workDoneToken;
    }
}