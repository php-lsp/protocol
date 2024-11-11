<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @generated 2024-09-21
 */
final class WorkDoneProgressEnd
{
    public function __construct(
        public readonly string $kind,
        /**
         * Optional, a final message indicating to for example indicate the
         * outcome of the operation.
         */
        public readonly ?string $message = null,
    ) {}
}
