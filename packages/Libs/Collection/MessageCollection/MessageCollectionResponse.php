<?php

namespace Packages\Libs\Collection\MessageCollection;

class MessageCollectionResponse
{
    public function __construct(
        public readonly string $id
    ) {}

    public static function create(string $val): self
    {
        return new self(id: $val);
    }
}
