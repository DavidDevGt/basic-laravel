<?php

namespace App\Http\Controllers;

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

        return view('welcome');
    }
}
