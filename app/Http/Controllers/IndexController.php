<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {

        $categorias = Categoria::all();


        $ocorrencia = Ocorrencia::all();
        return view('entrada', [
            'ocors' => $ocorrencia,
            'cat' => $categorias,
            'selecionado' => 0,
        ]);
    }
}
