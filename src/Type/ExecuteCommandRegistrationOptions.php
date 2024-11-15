<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * Registration options for a {@link ExecuteCommandRequest}.
 *
 * @generated 2024-11-15
 */
final class ExecuteCommandRegistrationOptions
{
    public function __construct(
        /**
         * The commands to be executed on the server.
         *
         * @var list<string>
         */
        public readonly array $commands = [],
        public readonly ?bool $workDoneProgress = null,
    ) {}
}
