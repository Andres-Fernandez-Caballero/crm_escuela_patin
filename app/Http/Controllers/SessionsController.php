<?php

namespace App\Http\Controllers;




class SessionsController extends Controller
{
    public function create()
    {
        return view ('login.create');
    }


    /* TODO: cambiar nombre por algo relacionado a loguearse */
    public function store()
{
    $attributes = request()->validate([
        'name' => 'required',
        'password' => 'required'
    ]);

    if (auth()->attempt($attributes)) {
        return redirect()->route('index');
    }

    return back()->withErrors(['name' => 'Las credenciales proporcionadas no son válidas.']);
}

    public function destroy()
    {
        auth()->logout();
        return redirect ('/');
    }
}
