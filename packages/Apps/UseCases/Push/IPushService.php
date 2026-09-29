<?php

namespace Packages\Apps\UseCases\Push;

interface IPushService
{
    public function exec(PushServiceRequest $request): PushServiceResponse;
}
