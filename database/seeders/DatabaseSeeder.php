<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'=>1,
                'name'=>'Administrador'
            ],
            [
                'id'=>2,
                'name'=>'Almacen'
            ]
        ]);

        DB::table('users')->insert([
            'dni'=>'19455541',
            'name'=>'Carlos',
            'email'=>'wmcarlosv@gmail.com',
            'second_name'=>'Eduardo',
            'last_name'=>'Vargas',
            'second_last_name'=>'Tovar',
            'address'=>'Urb Las palmas Calle F',
            'phone'=>'+584245093801',
            'password'=>bcrypt('Car2244los*'),
            'role_id'=>1
        ]);
    }
}
