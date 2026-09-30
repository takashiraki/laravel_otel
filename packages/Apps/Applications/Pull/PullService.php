<?php

declare(strict_types=1);

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
        $message = $this->message->pop(MessageCollectionRequest::create(key: 'hogehoge'));

        if ($message->id === null) {
            return PullServiceResponse::create(result: false);
        }

        return PullServiceResponse::create(result: true, val: $message->id);
    }
}
