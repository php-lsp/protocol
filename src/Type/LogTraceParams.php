<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

final class LogTraceParams
{
    public function __construct(
        public readonly string $message,
        public readonly ?string $verbose = null,
    ) {}
}
