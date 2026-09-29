<?php

namespace Packages\Apps\UseCases\Dispatch;

class DispatchServiceResponse
{
    public function __construct(
        public readonly bool $result
    ) {}

    public static function create(bool $val): self
    {
        return new self(result: $val);
    }
}
