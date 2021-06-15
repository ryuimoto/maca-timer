<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestTimer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:timer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $m = 25;
        $s = 59;

        for (; $m >= 0;) {
            dump(sprintf('%02d', $m).":".sprintf('%02d', $s));
            sleep(1);
            $s--;

            if($s<0){
                $m--;
                $s = 59;
            }
        }
            
    }
}
