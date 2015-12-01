<?php

namespace App\Front\Console\Commands;

use Illuminate\Console\Command;
use File;

class Up extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'front:up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bring the front out of maintenance mode.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        File::delete(storage_path('app/maintenance'));

        $this->info('Application is now live.');
    }
}
