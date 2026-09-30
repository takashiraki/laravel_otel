<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Packages\Apps\UseCases\Dispatch\DispatchServiceRequest;
use Packages\Apps\UseCases\Dispatch\IDispatchService;

#[Signature('app:dispatch-job')]
#[Description('Command description')]
class DispatchJob extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(
        IDispatchService $service
    ) {
        $service->exec(DispatchServiceRequest::create((string)Str::uuid()));
        return;
    }
}
