<?php

declare(strict_types=1);

namespace Packages\Apps\UseCases\Push;

interface IPushService
{
    public function exec(PushServiceRequest $request): PushServiceResponse;
}
