<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @since 3.18.0
 */
final class ClientShowMessageActionItemOptions
{
    public function __construct(
        /**
         * Whether the client supports additional attributes which are preserved
         * and send back to the server in the request's response.
         */
        public readonly ?bool $additionalPropertiesSupport = null,
    ) {}
}
