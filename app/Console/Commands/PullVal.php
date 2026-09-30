<?php

declare(strict_types=1);

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
    private bool $shouldStop = false;

    /**
     * Execute the console command.
     */
    public function handle(
        IPullService $service
    ) {
        $this->trap([SIGTERM, SIGINT], function () {
            $this->shouldStop = true;
        });

        while (! $this->shouldStop) {
            $response = $service->exec(PullServiceRequest::create((string)Str::uuid()));

            if (! $response->result) {
                usleep(200_000);
                continue;
            }

            $this->info($response->val);
        }
    }
}
