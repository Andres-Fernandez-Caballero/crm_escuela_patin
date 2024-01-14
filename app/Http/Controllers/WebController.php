<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('alumnos.index');
        }else{
            return redirect()->route('login');
        }

    }
}
