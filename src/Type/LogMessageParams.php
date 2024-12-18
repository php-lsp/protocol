<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * The log message parameters.
 */
final class LogMessageParams
{
    public function __construct(
        /**
         * The message type. See {@link MessageType}.
         */
        public readonly MessageType $type,
        /**
         * The actual message.
         */
        public readonly string $message,
    ) {}
}
