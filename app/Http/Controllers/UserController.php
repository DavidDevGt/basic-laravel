<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function index(int $user_id): view {
        // Aqui le metemos la logica de la aplicacion
        // usa las declaraciones de tipo
        
        // Para hacer un var_dump en laravel
        // dd($user_id);

        // SELECT * FROM users;
        // dd( User::all() );

        // SELECT * FROM users WHERE id = 1;
        $user = User::find($user_id);
        // dd($user);

        return view('welcome', ['user' => $user]);
    }
}
