<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PomodoroController extends Controller
{
    public function index($run_str){
        return view('user.pomodoro');
    }
}
