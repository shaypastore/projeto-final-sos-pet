<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nome' => 'Animal nas Ruas',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Denúncia',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Animal Desaparecido',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Resgate',
        ]);
    }
}
