<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

final class CancelParams
{
    public function __construct(
        /**
         * The request id to cancel.
         *
         * @var int<-2147483648, 2147483647>|string
         */
        public readonly int|string $id,
    ) {}
}
