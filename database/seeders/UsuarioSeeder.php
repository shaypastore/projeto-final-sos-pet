<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => 'Shaiane',
            'email' => 'shaiane@gmail.com',
            'senha' => 'shay1234',
            'papel' => 'Admin',
            'recebeNotificacao' => '1'
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'João',
            'email' => 'joao@gmail.com',
            'senha' => 'joao1234',
            'papel' => 'Visitor',
            'recebeNotificacao' => '0'
        ]);
    }
}
