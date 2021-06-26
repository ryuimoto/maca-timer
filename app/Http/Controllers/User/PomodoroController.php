<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pomodoro;
use Illuminate\Support\Facades\Artisan;

class PomodoroController extends Controller
{
    public function index($run_str_id){
        $pomo = Pomodoro::where('run_str_id',$run_str_id)->first();

        if(is_null($pomo)){
            return \App::abort(404);
        }
        
        return view('user.pomodoro')->with([
            'pomo' => $pomo, 
        ]);
    }

    public function newPomodoro($run_str_id){
        Pomodoro::create([
            'run_str_id' => $run_str_id,
            'timer' => 25,
        ]);
        
        return redirect()->route('user.pomodoro',[
            'run_str_id' => $run_str_id,
        ]);
    }

    public function startPomo(){
        Artisan::call('test:timer');
        
        return back();
    }
}