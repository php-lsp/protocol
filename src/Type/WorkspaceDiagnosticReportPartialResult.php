<?php

namespace Lsp\Protocol\Type;

/**
 * A partial result for a workspace diagnostic report.
 *
 * @generated 2024-05-04T17:58:12+00:00
 * @since 3.17.0
 */
final class WorkspaceDiagnosticReportPartialResult
{
    /**
     * @generated 2024-05-04T17:58:12+00:00
     * @since 3.17.0
     * @param list<WorkspaceFullDocumentDiagnosticReport|WorkspaceUnchangedDocumentDiagnosticReport> $items
     */
    final public function __construct(
        public readonly array $items,
    ) {}
}