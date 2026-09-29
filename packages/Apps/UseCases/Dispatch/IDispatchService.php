<?php

namespace Packages\Apps\UseCases\Dispatch;

interface IDispatchService
{
    public function exec(DispatchServiceRequest $request): DispatchServiceResponse;
}
