<?php

namespace Packages\Libs\Collection\RedisCollection;

use Illuminate\Support\Facades\Redis;
use Override;
use Packages\Libs\Collection\MessageCollection\IMessageCollection;
use Packages\Libs\Collection\MessageCollection\MessageCollectionRequest;
use Packages\Libs\Collection\MessageCollection\MessageCollectionResponse;

class RedisCollection implements IMessageCollection
{
    public function push(MessageCollectionRequest $request): void
    {
        Redis::rPush($request->key, $request->val);
    }

    public function pop(MessageCollectionRequest $request): MessageCollectionResponse
    {
        return MessageCollectionResponse::create(Redis::lPop($request->key, $request->val));
    }
}
