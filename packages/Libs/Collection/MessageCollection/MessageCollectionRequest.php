<?php

namespace Packages\Libs\Collection\MessageCollection;

class MessageCollectionRequest
{
    public function __construct(
        public readonly string $key,
        public readonly string $val
    ) {}

    public static function create(string $key, string $val): self
    {
        return new self(key: $key, val: $val);
    }
}
