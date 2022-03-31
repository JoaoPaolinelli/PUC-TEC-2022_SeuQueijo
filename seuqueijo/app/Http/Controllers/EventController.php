<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $nome = 'Joao';
        $idade = 23;
        $array = [1, 2, 3, 4, 5];
        $name = ['Joao', 'Arthur', 'Daniel', 'Igor', 'Gleysse', 'Jessi'];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'array' => $array,
            'name' => $name,
        ]);
    }

    public function create() {
        return view('events.create');
        
    }
}
