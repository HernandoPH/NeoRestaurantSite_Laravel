<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(){
   /* if(request()->has('empty')){
        $users=[];
    }else{
        $users=["Nando","Lucia","Padme","Daniela"];

    }*/


    $users=User::all();
//    $users = DB::table('users')->get();

    //dd($users);
    //$users=[];

        return view('users.index',[
            'users'=>$users,
            'title'=>'Listado de Usuarios'
        ]);
    }
    public function show($id){
        $user=User::find($id);
        if($user==null){
            return view('error.404');
        }
       return view('users.show',compact('user')); 
    }
    public function create(){
        return view('users.crearUser'); 

     
    }
    public function Store(){
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ],[
            'name'=>'Nombre es Obligatorio',
            'email'=>'Email es Obligatorio',
            'password'=>'Constraseña es Obligatoria',


        ]);
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
        return redirect()->route('users.index');
       // return view('users.store'); 

   
    }
}
