<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TopController extends Controller
{
    public function index(){
        $run_str = Str::random(8);
        
        return view('user.top')->with([
            'run_str' => $run_str,
        ]);
    }
}
