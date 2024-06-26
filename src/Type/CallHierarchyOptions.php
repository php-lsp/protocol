<?php

namespace Lsp\Protocol\Type;

/**
 * Call hierarchy options used during static registration.
 *
 * @generated
 * @since 3.16.0
 */
class CallHierarchyOptions
{
    use CallHierarchyOptionsMixin;

    public function __construct(bool $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}
