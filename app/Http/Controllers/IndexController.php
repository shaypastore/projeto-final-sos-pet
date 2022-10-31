<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function index () {

            $ocorrencia = Ocorrencia::all();
            return view('entrada', [
                'ocors' => $ocorrencia,
            ]);
        
    
    }

}
