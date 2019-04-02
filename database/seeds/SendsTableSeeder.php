<?php

use Illuminate\Database\Seeder;

class SendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sends::class, 20)->create();
    }
}
