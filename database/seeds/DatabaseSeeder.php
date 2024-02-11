<?php

use App\Property;
use App\UserType;
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
        //comment UserTypeSeeder if already userTypes already exits
        $this->call(UserTypeSeeder::class);
        // UserType::factory(10)->create();
        // Property::factory()->create();
        $this->call(PropertySeeder::class);
    }
}
