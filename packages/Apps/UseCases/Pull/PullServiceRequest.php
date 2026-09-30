<?php

declare(strict_types=1);

namespace Packages\Apps\UseCases\Pull;

class PullServiceRequest
{
    public function __construct(
        public readonly string $val
    ) {
    }

    public static function create(string $val): self
    {
        return new self(val: $val);
    }
}
