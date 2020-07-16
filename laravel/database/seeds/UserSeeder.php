<?php
use App\User;
use App\role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //$profesiones=DB::select('select id from profesion where title = ?', ["Desarrolador Back-End"]);


        /*$profesiones=DB::table('profesions')
        ->select('id')
        ->where('title','=','Desarrolador Back-End')
        ->first(); 
        
        */

        $roleId=role::where('role','Aministrador')->value('id');
        User::create([
            'name'=>'nando',
            'email'=>"nando@nando.com",
            'password'=> bcrypt('nando'),
            //'profesion_id'=>$profesiones->id
            'role_id'=>$roleId
        ]);

        $roleId=role::where('role','Camarero')->value('id');
        User::create([
            'name'=>'papa',
            'email'=>"papa@papa.com",
            'password'=> bcrypt('papa'),
            'role_id'=>$roleId
        ]);
        $roleId=role::where('role','Camarero')->value('id');
        User::create([
            'name'=>'mama',
            'email'=>"mama@mama.com",
            'password'=> bcrypt('mama'),
            'role_id'=>$roleId
        ]);
        $roleId=role::where('role','Cocinero')->value('id');
        User::create([
            'name'=>'cocina',
            'email'=>"cocina@cocina.com",
            'password'=> bcrypt('cocina'),
            'role_id'=>$roleId
        ]);
        $roleId=role::where('role','Local')->value('id');
        User::create([
            'name'=>'local',
            'email'=>"local@local.com",
            'password'=> bcrypt('local'),
            'role_id'=>$roleId
        ]);
    }
}
