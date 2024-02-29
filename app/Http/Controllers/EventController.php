<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        $nome = 'gabriel';
        $idade = 19;
        $arr = [10, 30, 20];
        $nomes = ['ana flavia', 'vitoria', 'aghata'];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(): View
    {
        return view('events/create');
    }
}
