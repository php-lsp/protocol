<?php

namespace Lsp\Protocol\Type;

/**
 * @generated 2024-05-04T17:58:12+00:00
 */
final class LinkedEditingRangeRegistrationOptions
{
    use StaticRegistrationOptionsMixin;

    use TextDocumentRegistrationOptionsMixin;

    use LinkedEditingRangeOptionsMixin;

    /**
     * @generated 2024-05-04T17:58:12+00:00
     */
    final public function __construct(array|null $documentSelector, bool $workDoneProgress, string $id)
    {
        $this->documentSelector = $documentSelector;

        $this->workDoneProgress = $workDoneProgress;

        $this->id = $id;
    }
}