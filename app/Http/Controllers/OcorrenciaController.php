<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class OcorrenciaController extends Controller
{
    
    public function criar()
    {
        return view('ocorrencias/criar');
    }

    public function ver(Ocorrencia $ocor)
    {
        return view('ocorrencias/ver', [
            'ocorrencia' => $ocor,    
        ]);
    }


    public function inserir(Request $form)
    {
        $dados = $form->validate([
            'titulo' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'descricao' => 'required'
        ]);
        $imgCaminho = $form->file('img')->store('', 'imagens');
        $dados['img'] = $imgCaminho;
        Ocorrencia::create($dados);

        return redirect()->route('inicio');
    }

}
