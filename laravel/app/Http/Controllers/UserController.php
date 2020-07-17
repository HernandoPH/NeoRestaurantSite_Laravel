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
            'email'=>'required|email|unique:users,email',
            'password'=>'required'
        ],[
            'name.required'=>'Nombre es Obligatorio',
            'email.required'=>'Email es Obligatorio',
            'password.required'=>'Constraseña es Obligatoria',
            'email.unique' => 'Ya existe un usuario con ese email'



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
