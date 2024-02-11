<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\UserInfo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserInfoFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */

     protected $model = UserInfo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    public function definition(): array
    {

        return [
            'user_id' => User::factory(),
            'profile_img' => 'img/changeprofile.png',
            'fullname' => fake()->name(),
            'user_type' => 1,
            'location' => fake()->address(),
            'job_title' => fake()->word()
        ];
    }

  
}
