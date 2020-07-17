<?php
use App\role;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       role::create([
            'role'=>'Camarero'
        ]);
        DB::table('roles')->insert([
            'role'=>'Administrador'
        ]);
        DB::table('roles')->insert([
            'role'=>'Cocinero'
        ]);
        DB::table('roles')->insert([
            'role'=>'Local'
        ]);
    }
}
