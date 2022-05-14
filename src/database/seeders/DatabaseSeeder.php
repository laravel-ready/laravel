<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\User\DefaultUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // add seeder classes here
            // DefaultUserSeeder::class,
        ]);
    }
}
