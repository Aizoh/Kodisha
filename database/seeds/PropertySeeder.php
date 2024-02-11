<?php

use Illuminate\Database\Seeder;
use App\Property; // Add this use statement

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 26; $i++) {
            Property::factory()->create(['img_url' => 'img/property/' . $i . '.jpg']);
        }
    }
}
