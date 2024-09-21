<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * Show message request client capabilities.
 *
 * @generated 2024-09-21
 */
final class ShowMessageRequestClientCapabilities
{
    public function __construct(
        /**
         * Capabilities specific to the `MessageActionItem` type.
         */
        public readonly ?ShowMessageRequestClientCapabilitiesMessageActionItem $messageActionItem = null,
    ) {}
}