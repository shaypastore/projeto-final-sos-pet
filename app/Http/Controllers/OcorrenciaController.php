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

    public function index()
    {
        $ocorrencias = Ocorrencia::all();
        return view('ocorrencia/index', [
            'ocors' => $ocorrencias,
        ]);
    }

    public function filtrar () {
        
    }

    public function finalizar (Ocorrencia $ocor) {

        //$ocor = Ocorrencia::where('id', $ocor[0] )->update('situacao', '1');


        return view('ocorrencias/ver', [
            'ocorrencia' => $ocor,    
        ]);

    }

}
