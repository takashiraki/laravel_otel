<?php

namespace Packages\Apps\Applications\Push;

use Override;
use Packages\Apps\UseCases\Push\IPushService;
use Packages\Apps\UseCases\Push\PushServiceRequest;
use Packages\Apps\UseCases\Push\PushServiceResponse;
use Packages\Libs\Collection\MessageCollection\IMessageCollection;
use Packages\Libs\Collection\MessageCollection\MessageCollectionRequest;
use Packages\Libs\Str\IStr;

class PushService implements IPushService
{
    public function __construct(
        private IMessageCollection $message,
        private IStr $str
    ) {}

    #[Override]
    public function exec(
        PushServiceRequest $request,
    ): PushServiceResponse {
        $key = $this->str->uuid();

        $this->message->push(MessageCollectionRequest::create(($key)));
        return PushServiceResponse::create($key);
    }
}
