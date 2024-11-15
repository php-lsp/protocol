<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * @since 3.18.0
 *
 * @generated 2024-11-15
 */
final class NotebookDocumentFilterWithNotebook
{
    public function __construct(
        /**
         * The notebook to be synced If a string value is provided it matches
         * against the notebook type. '*' matches every notebook.
         */
        public readonly string|NotebookDocumentFilterNotebookType|NotebookDocumentFilterScheme|NotebookDocumentFilterPattern $notebook,
        /**
         * The cells of the matching notebook to be synced.
         *
         * @var list<NotebookCellLanguage>|null
         */
        public readonly ?array $cells = null,
    ) {}
}
