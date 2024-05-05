<?php

namespace Lsp\Protocol\Type;

/**
 * Registration options for a {@link DefinitionRequest}.
 *
 * @generated
 */
final class DefinitionRegistrationOptions
{
    use TextDocumentRegistrationOptionsMixin;

    use DefinitionOptionsMixin;

    /**
     * @generated
     */
    final public function __construct(array|null $documentSelector, bool $workDoneProgress)
    {
        $this->documentSelector = $documentSelector;

        $this->workDoneProgress = $workDoneProgress;
    }
}
