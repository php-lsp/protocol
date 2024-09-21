<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

/**
 * The reason why code actions were requested.
 *
 * @since 3.17.0
 *
 * @generated 2024-09-21
 */
enum CodeActionTriggerKind: int
{
    /**
     * Code actions were explicitly requested by the user or by an extension.
     *
     * @var int<0, 2147483647>
     */
    case Invoked = 1;
    /**
     * Code actions were requested automatically.
     *
     * This typically happens when current selection in a file changes, but can
     * also be triggered when file content changes.
     *
     * @var int<0, 2147483647>
     */
    case Automatic = 2;
}