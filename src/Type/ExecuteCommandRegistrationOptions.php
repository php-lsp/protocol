<?php

namespace Lsp\Protocol\Type;

/**
 * Registration options for a {@link ExecuteCommandRequest}.
 *
 * @generated 2024-05-04T17:58:12+00:00
 */
final class ExecuteCommandRegistrationOptions
{
    use ExecuteCommandOptionsMixin;

    /**
     * @generated 2024-05-04T17:58:12+00:00
     */
    final public function __construct(array $commands, bool $workDoneProgress)
    {
        $this->commands = $commands;

        $this->workDoneProgress = $workDoneProgress;
    }
}
