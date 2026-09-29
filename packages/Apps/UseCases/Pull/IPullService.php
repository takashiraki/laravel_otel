<?php

declare(strict_types=1);

namespace Packages\Apps\UseCases\Pull;

interface IPullService
{
    public function exec(PullServiceRequest $request): PullServiceResponse;
}
