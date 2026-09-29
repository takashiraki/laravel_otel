<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Packages\Apps\UseCases\Push\IPushService;
use Packages\Apps\UseCases\Push\PushServiceRequest;

#[Signature('app:push-val')]
#[Description('Command description')]
class PushVal extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(
        IPushService $service
    ): void {
        $service->exec(PushServiceRequest::create((string)Str::uuid()));
    }
}
