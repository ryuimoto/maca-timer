<?php

use Illuminate\Database\Seeder;
use App\Pomodoro;
use Illuminate\Support\Str;

class PomodorosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            $run_str_id = Str::random(8);

            Pomodoro::create([
                'run_str_id' => $run_str_id,
                'timer' => '25:00',
            ]);
           
        }

    }
}
