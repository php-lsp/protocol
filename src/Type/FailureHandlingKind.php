<?php

namespace Lsp\Protocol\Type;

/**
 * @generated
 */
enum FailureHandlingKind: string
{
    /**
     * Applying the workspace change is simply aborted if one of the changes provided
     * fails. All operations executed before the failing operation stay executed.
     *
     * @generated
     */
    case Abort = 'abort';

    /**
     * All operations are executed transactional. That means they either all
     * succeed or no changes at all are applied to the workspace.
     *
     * @generated
     */
    case Transactional = 'transactional';

    /**
     * If the workspace edit contains only textual file changes they are executed transactional.
     * If resource changes (create, rename or delete file) are part of the change the failure
     * handling strategy is abort.
     *
     * @generated
     */
    case TextOnlyTransactional = 'textOnlyTransactional';

    /**
     * The client tries to undo the operations already executed. But there is no
     * guarantee that this is succeeding.
     *
     * @generated
     */
    case Undo = 'undo';
}
