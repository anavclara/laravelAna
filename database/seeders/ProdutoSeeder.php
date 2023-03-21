<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'categoria_id'      => 1,
            'nome'              => 'Detergente', 
            'quantidade'        => 10, 
            'valor'             => 2.67

        ]);

        DB::table('produtos')->insert([
            'categoria_id'      => 1,
            'nome'              => 'Sabão', 
            'quantidade'        => 15, 
            'valor'             => 10.42

        ]);

        DB::table('produtos')->insert([
            'categoria_id'      => 1,
            'nome'              => 'Amaciante', 
            'quantidade'        => 30, 
            'valor'             => 15.42

        ]);

        DB::table('produtos')->insert([
            'categoria_id'      => 2,
            'nome'              => 'Cadeira', 
            'quantidade'        => 2, 
            'valor'             => 800.00

        ]);
    }
}
