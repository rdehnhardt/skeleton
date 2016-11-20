<?php

namespace App\Console\Routes;

use App\Console\Commands\Inspire;
use Artisan;

class Commands
{
    /**
     * Define the commands for the application.
     */
    public function map()
    {
        $this->mapInspire();
    }

    /**
     * Map inspire command
     */
    private function mapInspire()
    {
        Artisan::command(Inspire::class);
    }
}
