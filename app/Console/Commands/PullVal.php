<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Packages\Apps\UseCases\Pull\IPullService;
use Packages\Apps\UseCases\Pull\PullServiceRequest;

#[Signature('app:pull-val')]
#[Description('Command description')]
class PullVal extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(
        IPullService $service
    ) {
        $service->exec(PullServiceRequest::create((string)Str::uuid()));
    }
}
