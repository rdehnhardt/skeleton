<?php

namespace App\Front\Console\Commands;

use Illuminate\Console\Command;
use File;

class Down extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'front:down';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Put the application into maintenance mode.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        File::put(storage_path('app/maintenance'), '');

        $this->info('Application is now in maintenance mode.');
    }
}
