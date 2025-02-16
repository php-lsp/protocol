<?php

declare(strict_types=1);

namespace Lsp\Protocol\Type;

enum WatchKind: int
{
    /**
     * Interested in create events.
     */
    case Create = 1;
    /**
     * Interested in change events.
     */
    case Change = 2;
    /**
     * Interested in delete events.
     */
    case Delete = 4;
}
