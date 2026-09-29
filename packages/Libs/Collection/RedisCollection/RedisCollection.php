<?php

namespace Packages\Libs\Collection\RedisCollection;

use Illuminate\Support\Facades\Redis;
use Override;
use Packages\Libs\Collection\MessageCollection\IMessageCollection;
use Packages\Libs\Collection\MessageCollection\MessageCollectionRequest;

class RedisCollection implements IMessageCollection
{
    public function push(MessageCollectionRequest $request): void
    {
        Redis::rPush($request->key);
    }
}
