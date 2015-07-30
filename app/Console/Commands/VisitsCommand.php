<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;

class VisitsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:visits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simulate Visits.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('analytcs_visits')->delete();
        $Date = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-05-01 00:00:00'));
        $user = "3_6_115_27082_31_546_11_14";

        for ($i = 1; $i <= 50000; $i++) {
            $Tmp = $Date->addHour(rand(0, 23));

            DB::table('analytcs_visits')->insert([
                'uuid' => ($i % 2 == 0 ? uniqid() : $user),
                'ip' => '192.168.10.1',
                'location' => 'http://skeleton.app/',
                'created_at' => $Tmp->format('Y-m-d H:i:s'),
            ]);
        }
    }

}
