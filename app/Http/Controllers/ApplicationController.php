<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function __invoke()
    {
        return view('application');
    }
    public function demo(){
        return response()->json(['message' => 'Successfully demo']);
    }
}
