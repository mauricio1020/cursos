<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();
        /*Desde aqui llamamos a todo los seeders que deseemos crear*/
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
