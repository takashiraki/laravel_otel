<?php

declare(strict_types=1);

namespace Packages\Libs\Illuminates\Str;

use Illuminate\Support\Str as SupportStr;

class Strings implements IStr
{
    public function uuid(): string
    {
        return (string)SupportStr::uuid();
    }
}
