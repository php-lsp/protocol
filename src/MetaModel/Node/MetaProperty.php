<?php

declare(strict_types=1);

namespace Lsp\Protocol\Generator\MetaModel\Node;

use Lsp\Protocol\Generator\MetaModel\Node\Type\MetaType;
use Lsp\Protocol\Generator\MetaModel\Node\Type\MetaTypeInterface;

/**
 * Represents an object property.
 */
final class MetaProperty extends Definition
{
    /**
     * @param non-empty-string $name the property name
     * @param MetaTypeInterface $type the type of the property
     * @param bool|null $optional Whether the property is optional. If omitted,
     *        the property is mandatory.
     * @param non-empty-string|null $documentation an optional documentation
     * @param non-empty-string|null $since Since when (release number) this
     *        property is available. Is undefined if not known.
     * @param bool|null $proposed Whether this is a proposed property. If
     *        omitted, the structure is final.
     * @param non-empty-string|null $deprecated Whether the property is
     *        deprecated or not. If deprecated the property contains the
     *        deprecation message.
     */
    public function __construct(
        public string $name,
        public MetaTypeInterface $type,
        public ?bool $optional,
        ?string $documentation,
        ?string $since,
        ?bool $proposed,
        ?string $deprecated,
    ) {
        parent::__construct(
            documentation: $documentation,
            since: $since,
            proposed: $proposed,
            deprecated: $deprecated,
        );
    }

    public function getSubNodeNames(): array
    {
        return ['type'];
    }

    /**
     * @param array{
     *     name: non-empty-string,
     *     type: array<array-key, mixed>,
     *     optional?: bool,
     *     documentation?: non-empty-string,
     *     since?: non-empty-string,
     *     proposed?: bool,
     *     deprecated?: non-empty-string
     * } $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'],
            type: MetaType::fromArray($data['type']),
            optional: $data['optional'] ?? null,
            documentation: $data['documentation'] ?? null,
            since: $data['since'] ?? null,
            proposed: $data['proposed'] ?? null,
            deprecated: $data['deprecated'] ?? null,
        );
    }
}
