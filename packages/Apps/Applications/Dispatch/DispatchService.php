<?php

namespace Packages\Apps\Applications\Dispatch;

use App\Jobs\MyJob;
use Packages\Apps\UseCases\Dispatch\DispatchServiceRequest;
use Packages\Apps\UseCases\Dispatch\DispatchServiceResponse;
use Packages\Apps\UseCases\Dispatch\IDispatchService;

class DispatchService implements IDispatchService
{
    public function exec(DispatchServiceRequest $request): DispatchServiceResponse
    {
        MyJob::dispatch($request->val);
        return DispatchServiceResponse::create(true);
    }
}
