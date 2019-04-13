<?php

use Illuminate\Database\Seeder;

class GroomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Groomer::class, 20)->create();
    }
}
