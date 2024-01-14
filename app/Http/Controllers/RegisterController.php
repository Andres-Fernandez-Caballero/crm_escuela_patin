<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create ()
    {
        return view ('register.create');
    }
    public function store ()
    {
    
        $attributes =  request()->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        // $attributes['password'] = bcrypt($attributes['password']);

        try{
            $user = User::create($attributes);
            auth()->login($user);
            return redirect()->route('index');
        }

        catch(\Exception $e){
            return 'error al registrarse'; // back()->withErrors(['email'=>'Error al registrar el usuario']);
        }


    }
}
