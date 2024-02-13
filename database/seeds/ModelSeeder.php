<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Mymodel;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $models = [  
            ['id' => 2, 'name' => 'Role', 'friendly' => 'Manage Roles'],    
            ['id' => 3, 'name' => 'Contact', 'friendly' => 'Manage Contacts'],
            ['id' => 4, 'name' => 'Booking', 'friendly' => 'Manage Bookings'],
            ['id' => 5, 'name' => 'Event', 'friendly' => 'Manage Events'],
            ['id' => 6, 'name' => 'Menu', 'friendly' => 'Manage Menus'],
            ['id' => 7, 'name' => 'Blog', 'friendly' => 'Manage Blogs'],
            ['id' => 8, 'name' => 'Service', 'friendly' => 'Manage Services'],
            ['id' => 9, 'name' => 'Company', 'friendly' => 'Manage Company'],
            ['id' => 10, 'name' => 'Testimonial', 'friendly' => 'Manage Testimonials'],
            ['id' => 11, 'name' => 'Fact', 'friendly' => 'Manage Facts'],

        ];
        foreach($models as $model){
                Mymodel::create($model);
        }
    }
}
