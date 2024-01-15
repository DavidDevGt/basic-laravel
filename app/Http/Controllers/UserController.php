<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(int $user_id): string {
        // Aqui le metemos la logica de la aplicacion
        // usa las declaraciones de tipo
        
        // Para hacer un var_dump en laravel
        // dd($user_id);

        return '<h1>Desde el controller users</h1>';
    }
}
