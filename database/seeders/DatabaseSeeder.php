<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Story;
use App\Models\Places;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Database\Seeders\CountrySeeder;

class  DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::factory(20)->create();

        Country::create([
            'name_country' => 'Indonesia',
            'slug' => 'id'
        ]);

        Country::create([
            'name_country' => 'Thailand',
            'slug' => 'th'
        ]);

        Country::create([
            'name_country' => 'Singapura',
            'slug' => 'sg'
        ]);

        Country::create([
            'name_country' => 'Vietnam',
            'slug' => 'vn'
        ]);

        Country::create([
            'name_country' => 'Filipina',
            'slug' => 'ph'
        ]);

        Country::create([
            'name_country' => 'Laos',
            'slug' => 'la'
        ]);

        Country::create([
            'name_country' => 'Myanmar',
            'slug' => 'mm'
        ]);

        Country::create([
            'name_country' => 'Brunei',
            'slug' => 'bn'
        ]);

        Country::create([
            'name_country' => 'Kamboja',
            'slug' => 'kh'
        ]);

        Country::create([
            'name_country' => 'Malaysia',
            'slug' => 'my'
        ]);

        
        Places::factory(20)->create();
        Story::factory(20)->create();
    }
}
