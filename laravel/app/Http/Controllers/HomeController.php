<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\categorias;



class HomeController extends Controller
{
    public function index(){
      
             return view('home.index',[
                 'title'=>'Home'
             ]);
         }
         public function menu(){
      
    $menu=menu::all();
    $categorias=categorias::all();


            return view('home.menu',[
                'categorias'=>$categorias,
                'menu'=>$menu,
                'title'=>'menu'
            ]);
        }
}
