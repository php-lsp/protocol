<?php

namespace Lsp\Protocol\Type;

/**
 * @generated 2024-05-04T17:58:12+00:00
 */
class TypeDefinitionOptions
{
    use TypeDefinitionOptionsMixin;

    /**
     * @generated 2024-05-04T17:58:12+00:00
     */
    public function __construct(bool $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}