<?php

namespace Packages\Libs\Collection\MessageCollection;

interface IMessageCollection
{
    public function push(MessageCollectionRequest $request): void;

    public function pop(MessageCollectionRequest $request): MessageCollectionResponse;
}
