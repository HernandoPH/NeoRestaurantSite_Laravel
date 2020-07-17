<?php

use Illuminate\Database\Seeder;
use App\menu;
use App\categorias;


class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /* categorias::create([
            'nombre_categoria'=>'empezar'
        ]);*/

        $categoriaNombre=categorias::where('nombre_categoria','empezar')->value('nombre_categoria');
        //dd($categoriaNombre);
        menu::create([
            'nombre_menu'=>'Ostras Gillasdeau',
            'descripcion_menu'=>"Ostras",
            'precio'=> 15,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Ostras-Gillardeau.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Aperitivo de marisco',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Aperitivo-marisco.jpg"
        ]);

        menu::create([
            'nombre_menu'=>'Ostras Gallegas',
            'descripcion_menu'=>"ostras",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"ostras.jpg"
        ]);
  
        menu::create([
            'nombre_menu'=>'Canhaillas del Mediterraneo',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 10,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"canaillas.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Percebe de la Costa da Morte',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 17,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"percebes.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Camarones Gallegos',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Camarones-900x600.jpg"
        ]);

        menu::create([
            'nombre_menu'=>'Patas de Cangrejo',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 15,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Cangrejo-Real.jpg"
        ]);
        $categoriaNombre=categorias::where('nombre_categoria','frios')->value('nombre_categoria');

        menu::create([
            'nombre_menu'=>'Carpaccio de gamba roja',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 15,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Carpaccio-gamba-roja.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Anchoas del Cantabrico',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 14,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"anchoas.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Tamizado de Tomate con Langostinos',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 13,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"tamizado-tomate-langostinos.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Paletilla Iberica de bellota',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 8,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Jamon.jpg"
        ]);
        $categoriaNombre=categorias::where('nombre_categoria','calientes')->value('nombre_categoria');

        menu::create([
            'nombre_menu'=>'Pulpo',
            'descripcion_menu'=>"aperitivo",
            'precio'=>9,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Pulpo.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Calamares a la Romana ',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 7,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Calamares.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Chipirones salteados con garbanzos',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 18,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Chipironesgarbanzos.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Almejas marinera',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 9,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Almejas-marinera.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Berberechos al vapor',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"berberechos.jpg"
        ]);
    
        menu::create([
            'nombre_menu'=>'Mejillones',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 8,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"mejillones.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Pescadito Frito',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"pescaito-frito.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Croquetas de pescado',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 7,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"croquetas.jpg"
        ]);


        $categoriaNombre=categorias::where('nombre_categoria','arroces')->value('nombre_categoria');
        menu::create([
            'nombre_menu'=>'Paella de Mariscos',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 25,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"paella-marisco.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Arroz Negro ',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 20,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"arroz-negro-1.jpg"
        ]);  
         menu::create([
            'nombre_menu'=>'Arroz con pulpo',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 23,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Arrozpulpo.jpg"
        ]);  
        $categoriaNombre=categorias::where('nombre_categoria','cuchara')->value('nombre_categoria');

        menu::create([
            'nombre_menu'=>'Lomo de bacalao con garbanzos en samfaina',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Bacalaogarbanzos.jpg"
        ]);
    
        menu::create([
            'nombre_menu'=>'Callos a la Gallega',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 14,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"CallosGarbanzos.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Alubias pochas con Almeja',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Alubias-pocjhas-con-almejas.jpg"
        ]);
        $categoriaNombre=categorias::where('nombre_categoria','carnes')->value('nombre_categoria');

        menu::create([
            'nombre_menu'=>'Entrecot a la brasa',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Entrecot.jpg"
        ]);

        menu::create([
            'nombre_menu'=>'Solomillo de Ternera',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 13,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Solomillo-1.jpg"
        ]);

        menu::create([
            'nombre_menu'=>'Costillitas de Cabrito',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 14,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"costillitas-cabrito.jpg"
        ]);
        $categoriaNombre=categorias::where('nombre_categoria','postres')->value('nombre_categoria');
        menu::create([
            'nombre_menu'=>'Oreja de Fraile',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 12,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Oreja-de-Fraile.png"
        ]);
        menu::create([
            'nombre_menu'=>'Torrija con helado de Vainilla',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 10,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"torrijas.jpg"
        ]);
      
        menu::create([
            'nombre_menu'=>'Leche frita con frutos rojos',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 8,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Leche-frita-coulis.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Queso Gallego con membrillo',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 14,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Queso-Gallego.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Tarta Sacher con Frambuesa',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 7,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"Sacher.jpg"
        ]);
        menu::create([
            'nombre_menu'=>'Profiteroles con chocolate caliente',
            'descripcion_menu'=>"aperitivo",
            'precio'=> 6,
            'categoria_menu'=>"$categoriaNombre",
            'img'=>"profiteroles.jpg"
        ]);


       
    }
}
