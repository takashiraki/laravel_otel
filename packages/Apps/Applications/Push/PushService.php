<?php

declare(strict_types=1);

namespace Packages\Apps\Applications\Push;

use Packages\Apps\UseCases\Push\IPushService;
use Packages\Apps\UseCases\Push\PushServiceRequest;
use Packages\Apps\UseCases\Push\PushServiceResponse;
use Packages\Libs\Collection\MessageCollection\IMessageCollection;
use Packages\Libs\Collection\MessageCollection\MessageCollectionRequest;
use Packages\Libs\Illuminates\Str\IStr;

class PushService implements IPushService
{
    public function __construct(
        private IMessageCollection $message,
        private IStr $str
    ) {}

    public function exec(
        PushServiceRequest $request,
    ): PushServiceResponse {
        $key = $this->str->uuid();

        $this->message->push(MessageCollectionRequest::create('hogehoge', $key));
        return PushServiceResponse::create(true);
    }
}
