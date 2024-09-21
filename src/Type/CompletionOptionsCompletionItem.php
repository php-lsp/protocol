<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @generated 2024-09-21
 */
final class CompletionOptionsCompletionItem
{
    public function __construct(
        /**
         * The server has support for completion item label details (see also
         * `CompletionItemLabelDetails`) when receiving a completion item in a
         * resolve call.
         *
         * @since 3.17.0
         */
        public readonly ?bool $labelDetailsSupport = null,
    ) {}
}