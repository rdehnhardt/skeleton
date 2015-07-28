<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VisitTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('analytcs_visits')->delete();
        $initDate = Carbon::createFromFormat('d/m/Y', '01/07/2015');

        for ($i = 1; $i <= 30; $i++) {
            $visits = rand(20, 200);

            for ($j = 1; $j <= $visits; $j++) {
                DB::table('analytcs_visits')->insert([
                    'uuid' => uniqid(),
                    'location' => 'http://skeleton.app/',
                    'ip' => '192.168.10.1',
                    'created_at' => $initDate->addDay($i),
                    'updated_at' => $initDate->addDay($i)
                ]);
            }
        }
    }

}