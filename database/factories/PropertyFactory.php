<?php

namespace Database\Factories;

use App\Property;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PropertyFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */

     protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'name' => fake()->company(),
            'price' => fake()->biasedNumberBetween(50000, 2000000),
            'negotiable' => 1,
            'address' => fake()->address,
            'description' => fake()->paragraph(),
            'bed' => fake()->biasedNumberBetween(0, 4),
            'bath' => fake()->biasedNumberBetween(0, 4),
            'area' => fake()->biasedNumberBetween(200, 2300),
            'agent' => fake()->name('male'),
            'telephone' => fake()->phoneNumber,
            'email' => fake()->email,
            'img_url' => 'img/realestate1.jpeg',
            'user_id' => User::factory(),
            'onSale' => fake()->boolean()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
 
}
