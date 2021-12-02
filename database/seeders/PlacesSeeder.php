<?php

namespace Database\Seeders;

use App\Models\Places;
use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Places::factory(20)->create();
    }
}
