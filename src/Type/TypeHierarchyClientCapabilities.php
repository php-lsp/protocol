<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @since 3.17.0
 */
final class TypeHierarchyClientCapabilities
{
    public function __construct(
        /**
         * Whether implementation supports dynamic registration. If this is set
         * to `true` the client supports the new
         * `(TextDocumentRegistrationOptions & StaticRegistrationOptions)`
         * return value for the corresponding server capability as well.
         */
        public readonly ?bool $dynamicRegistration = null,
    ) {}
}
