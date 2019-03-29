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
        DB::table('permissions')->insert([
            'id' => 1,
            'name' => 'Usuario',
            'slug' => 'sends.create',
            'description' => 'Un usuario puede crear varios paquetes',
            'created_at' => '2019-03-29 17:12:28',
            'updated_at' => '2019-03-29 17:12:28'
        ]);

        DB::table('permissions')->insert([
            'id' => 2,
            'name' => 'Repartidor',
            'slug' => 'sends.index',
            'description' => 'Un repartidor puede ver todos los paquetes',
            'created_at' => '2019-03-29 17:12:30',
            'updated_at' => '2019-03-29 17:12:30'
        ]);

        DB::table('permission_user')->insert([
            'id' => 1,
            'permission_id' => 1,
            'user_id' => 1,
            'created_at' => '2019-03-29 17:12:30',
            'updated_at' => '2019-03-29 17:12:30'
        ]);

        DB::table('permission_user')->insert([
            'id' => 2,
            'permission_id' => 2,
            'user_id' => 2,
            'created_at' => '2019-03-29 17:12:30',
            'updated_at' => '2019-03-29 17:12:30'
        ]);
    }
}
