<?php

declare(strict_types=1);

namespace Lsp\Protocol\Generator\Output\Transformer;

use Lsp\Protocol\Generator\MetaModel\Node\MetaModel;
use Lsp\Protocol\Generator\MetaModel\Node\Type\TypeInterface;
use PhpParser\Node as NodeInterface;

final class Lsp2PhpTransformer
{
    private readonly Lsp2TypeLangTransformer $lsp2tl;

    private readonly TypeLang2PhpTransformer $tl2php;

    public function __construct(MetaModel $ctx)
    {
        $this->lsp2tl = new Lsp2TypeLangTransformer($ctx);
        $this->tl2php = new TypeLang2PhpTransformer();
    }

    public static function make(MetaModel $ctx, TypeInterface $type): NodeInterface
    {
        return (new self($ctx))->transform($type);
    }

    public function transform(TypeInterface $type): NodeInterface
    {
        return $this->tl2php->transform(
            stmt: $this->lsp2tl->transform($type),
        );
    }
}
