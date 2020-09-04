<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'adimer',
            'email' => 'adimer101@gmail.com',
            'archivo' => 'images/users/1.jpg',
            'password' => Hash::make('123456789'),
            'subcategoria_id'=>'1'
        ]);

        DB::table('users')->insert([
            'name' => 'sheldon',
            'email' => 'sheldon@gmail.com',
            'archivo' => 'images/users/1.jpg',
            'tipo'=>'POLICIAL',
            'password' => Hash::make('123456'),
            'subcategoria_id'=>'3'
        ]);
        DB::table('users')->insert([
            'name' => 'raj',
            'email' => 'raj@gmail.com',
            'archivo' => 'images/users/1.jpg',
            'tipo'=>'POLICIAL',
            'password' => Hash::make('123456'),
            'subcategoria_id'=>'3'
        ]);
        DB::table('users')->insert([
            'name' => 'howard',
            'email' => 'howard@gmail.com',
            'archivo' => 'images/users/1.jpg',
            'tipo'=>'POLICIAL',
            'password' => Hash::make('123456'),
            'subcategoria_id'=>'3'
        ]);
        DB::table('users')->insert([
            'name' => 'leo',
            'email' => 'leo@gmail.com',
            'archivo' => 'images/users/1.jpg',
            'tipo'=>'POLICIAL',
            'password' => Hash::make('123456'),
            'subcategoria_id'=>'3'
        ]);
    }
}
