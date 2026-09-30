<?php

declare(strict_types=1);

namespace Packages\Apps\UseCases\Push;

class PushServiceResponse
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
