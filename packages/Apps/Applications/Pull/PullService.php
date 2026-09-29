<?php

namespace Packages\Apps\Applications\Pull;

use Packages\Apps\UseCases\Pull\IPullService;
use Packages\Apps\UseCases\Pull\PullServiceRequest;
use Packages\Apps\UseCases\Pull\PullServiceResponse;
use Packages\Libs\Collection\MessageCollection\IMessageCollection;
use Packages\Libs\Collection\MessageCollection\MessageCollectionRequest;

class PullService implements IPullService
{
    public function __construct(
        private IMessageCollection $message
    ) {}

    public function exec(PullServiceRequest $request): PullServiceResponse
    {
        $this->message->pop(MessageCollectionRequest::create('key'));


        return PullServiceResponse::create(true);
    }
}
