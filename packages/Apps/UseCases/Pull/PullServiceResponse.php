<?php

declare(strict_types=1);

namespace Packages\Apps\UseCases\Pull;

class PullServiceResponse
{
    public function __construct(
        public readonly bool $result
    ) {
    }

    public static function create(bool $val): self
    {
        return new self(result: $val);
    }
}
