<?php

declare(strict_types=1);

namespace Lsp\Protocol\Generator\IR\Visitor\Analyzer;

use Lsp\Protocol\Generator\IR\Visitor\Service\TypeBuilder;
use Lsp\Protocol\Generator\MetaModel\Node\MetaModel;
use PhpParser\NodeVisitorAbstract;

abstract class AnalyzerVisitor extends NodeVisitorAbstract
{
    final public function __construct(
        protected readonly MetaModel $model,
        protected readonly TypeBuilder $types,
    ) {}
}
