<?php

namespace Lsp\Protocol\Type;

/**
 * Parameters for a {@link HoverRequest}.
 *
 * @generated 2024-05-04T17:58:12+00:00
 */
final class HoverParams
{
    use WorkDoneProgressParamsMixin;

    use TextDocumentPositionParamsMixin;

    /**
     * @generated 2024-05-04T17:58:12+00:00
     */
    final public function __construct(TextDocumentIdentifier $textDocument, Position $position, int|string $workDoneToken)
    {
        $this->textDocument = $textDocument;

        $this->position = $position;

        $this->workDoneToken = $workDoneToken;
    }
}