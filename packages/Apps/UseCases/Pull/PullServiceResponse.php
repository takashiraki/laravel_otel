<?php

declare(strict_types=1);

namespace Packages\Apps\UseCases\Pull;

class PullServiceResponse
{
    public function __construct(
        public readonly bool $result,
        public readonly ?string $val = null
    ) {}

    public static function create(bool $result, ?string $val = null): self
    {
        return new self(val: $val, result: $result);
    }
}
