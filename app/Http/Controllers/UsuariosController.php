<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    
    public function index()
   {
      return view('usuarios.index');
   }

   public function ver(Usuario $usuario) {
      
      $ocorrencia_usuario = Ocorrencia::where('usuario_id', $usuario->id)->with('usuarios')->get();
      return view('usuarios/ver', [
            'usuario' => $usuario,
            'ocorrencias' => $ocorrencia_usuario,
        ]);

   }

   public function login(Request $form)
   {
      $email = $form->email;
      $senha = $form->senha;

      $usuario = Usuario::select('id', 'nome', 'email', 'papel')->where('email', $email)->where('senha', $senha)->get();


      if ($usuario->count()) {
         $form->session()->put('usuario', $usuario[0]);
         return redirect()->route('inicio');
      } else {
         return redirect()->route('usuario.index')->with(
            'error',
            'Usuário ou senha inválidos'
         );
      }
   }

   public function logout()
   {
      session()->forget('usuario');
      return redirect()->route('usuario.index');
   }

   public function cadastrar()
   {
      return view('usuarios/cadastrar');
   }

   public function inserir(Request $form) 
   {
      $dados = $form->validate([
         'nome' => 'required',
         'email' => 'required',
         'senha' => 'required',
      
      ]);
     Usuario::create($dados);

     return redirect()->route('inicio');
   }

}
