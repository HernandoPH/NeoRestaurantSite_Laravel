<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->truncatedTables([
           'roles',
           'users',
           'categorias',
           'menu'
       ]);
        // $this->call(UserSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(categoriasSeeder::class);
         $this->call(menuSeeder::class);



         

    }
    protected function truncatedTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach($tables as $table){
            DB::table($table)->truncate();

        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
