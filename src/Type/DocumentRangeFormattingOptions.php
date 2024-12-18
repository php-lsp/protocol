<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * Provider options for a {@link DocumentRangeFormattingRequest}.
 */
final class DocumentRangeFormattingOptions
{
    public function __construct(
        /**
         * Whether the server supports formatting multiple ranges at once.
         *
         * @since 3.18.0
         *
         * @internal This is a proposed type, which means that the
         *           implementation of this type is not final. Please use this type at
         *           your own risk.
         */
        public readonly ?bool $rangesSupport = null,
        public readonly ?bool $workDoneProgress = null,
    ) {}
}
