<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * A notebook cell text document filter denotes a cell text document by
 * different properties.
 *
 * @since 3.17.0
 */
final class NotebookCellTextDocumentFilter
{
    public function __construct(
        /**
         * A filter that matches against the notebook containing the notebook
         * cell. If a string value is provided it matches against the notebook
         * type. '*' matches every notebook.
         */
        public readonly NotebookDocumentFilterNotebookType|NotebookDocumentFilterScheme|NotebookDocumentFilterPattern|string $notebook,
        /**
         * A language id like `python`.
         *
         * Will be matched against the language id of the notebook cell
         * document. '*' matches every language.
         */
        public readonly ?string $language = null,
    ) {}
}
