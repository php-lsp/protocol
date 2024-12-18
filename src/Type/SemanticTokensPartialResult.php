<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @since 3.16.0
 */
final class SemanticTokensPartialResult
{
    public function __construct(
        /**
         * @var list<int<0, 2147483647>>
         */
        public readonly array $data = [],
    ) {}
}
