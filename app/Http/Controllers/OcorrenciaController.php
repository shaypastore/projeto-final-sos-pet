<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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
            'categoria' => 'required',
            'descricao' => 'required'
        ]);
        
        $user_id = session()->get("usuario.id");
        $dados['usuario_id'] = $user_id;
        $dados['categoria_id'] = $form->get('categoria');

        $imgCaminho = $form->file('img')->store('', 'imagens');
        $dados['img'] = $imgCaminho;

        Ocorrencia::create($dados);

        return redirect()->route('inicio');
    }


    public function filtrar (Request $idCat) {

        $categorias = Categoria::all();

        if ($idCat->categoria == 0) {
            $ocorrencias = Ocorrencia::all();
        } else {
            $ocorrencias = Ocorrencia::where('categoria_id', $idCat->categoria)->get();
        }

        return view('entrada', [
            'ocors' => $ocorrencias,
            'cat' => $categorias,
            'selecionado' => $idCat->categoria,
        ]);
        
    }



    public function finalizar (Ocorrencia $ocor) {

        $ocor->situacao = '1';
        $ocor->save();

        return view('ocorrencias/ver', [
            'ocorrencia' => $ocor,    
        ]);

    }

}
