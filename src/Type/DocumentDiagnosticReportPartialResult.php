<?php

namespace Lsp\Protocol\Type;

/**
 * A partial result for a document diagnostic report.
 *
 * @generated 2024-05-04T17:58:12+00:00
 * @since 3.17.0
 */
final class DocumentDiagnosticReportPartialResult
{
    /**
     * @generated 2024-05-04T17:58:12+00:00
     * @since 3.17.0
     * @param array<non-empty-string, FullDocumentDiagnosticReport|UnchangedDocumentDiagnosticReport> $relatedDocuments
     */
    final public function __construct(
        public readonly array $relatedDocuments,
    ) {}
}
