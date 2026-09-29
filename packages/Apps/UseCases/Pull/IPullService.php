<?php

namespace Packages\Apps\UseCases\Pull;

interface IPullService
{
    public function exec(PullServiceRequest $request): PullServiceResponse;
}
