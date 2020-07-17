<?php

use Illuminate\Database\Seeder;
use App\categorias;


class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        categorias::create([
            'nombre_categoria'=>'empezar'
        ]);
        categorias::create([
            'nombre_categoria'=>'frios'
        ]); 
         categorias::create([
            'nombre_categoria'=>'calientes'
        ]);  
        categorias::create([
            'nombre_categoria'=>'arroces'
        ]);  
        categorias::create([
            'nombre_categoria'=>'cuchara'
        ]);
        categorias::create([
            'nombre_categoria'=>'carnes'
        ]);
        categorias::create([
            'nombre_categoria'=>'postres'
        ]);  
    }
}



