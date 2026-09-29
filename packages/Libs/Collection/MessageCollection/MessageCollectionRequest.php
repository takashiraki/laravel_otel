<?php

namespace Packages\Libs\Collection\MessageCollection;

class MessageCollectionRequest
{
    public function __construct(
        public readonly string $key
    ) {}

    public static function create(string $key): self
    {
        return new self(key: $key);
    }
}
