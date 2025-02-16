<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * A diagnostic report indicating that the last returned report is still
 * accurate.
 *
 * @since 3.17.0
 */
final class UnchangedDocumentDiagnosticReport
{
    public function __construct(
        /**
         * A document diagnostic report indicating no changes to the last
         * result. A server can only return `unchanged` if result ids are
         * provided.
         *
         * @var "unchanged"
         */
        public readonly string $kind,
        /**
         * A result id which will be sent on the next diagnostic request for the
         * same document.
         */
        public readonly string $resultId,
    ) {}
}
