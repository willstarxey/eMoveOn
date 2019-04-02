<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'=>'Guillermo Rios',
            'email'=>'willstarxey@gmail.com',
            'password'=>bcrypt("perro6366"),
            'disponible'=>1
        ]);
        $user1 = App\User::create([
            'name'=>'Javier Silva',
            'email'=>'ejemplo@gmail.com',
            'password'=>bcrypt("perro6366"),
            'disponible'=>1
        ]);
        $user2 = App\User::create([
            'name'=>'Rosa Hernández',
            'email'=>'ejemplo@outlook.com',
            'password'=>bcrypt("perro6366"),
            'disponible'=>1
        ]);
        $user3 = App\User::create([
            'name'=>'Gabriela Juárez',
            'email'=>'ejemplo@yahoo.com',
            'password'=>bcrypt("perro6366"),
            'disponible'=>1
        ]);
        $user4 = App\User::create([
            'name'=>'Jaime Herrera',
            'email'=>'ejemplo@ejemplo.com',
            'password'=>bcrypt("perro6366"),
            'disponible'=>1
        ]);
        $user->assignRole('Usuario');
        $user1->assignRole('Usuario');
        $user2->assignRole('Usuario');
        $user3->assignRole('Usuario');
        $user4->assignRole('Usuario');
    }
}
