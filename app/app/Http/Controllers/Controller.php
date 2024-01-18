<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome(){
        return view('welcome');
    }

    public function forme(){
        return view('form');
    }

    public function team(){
        return view('team');
    }
}

