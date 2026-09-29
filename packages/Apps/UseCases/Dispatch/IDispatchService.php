<?php

declare(strict_types=1);

namespace Packages\Apps\UseCases\Dispatch;

interface IDispatchService
{
    public function exec(DispatchServiceRequest $request): DispatchServiceResponse;
}
