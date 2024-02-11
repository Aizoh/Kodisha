<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\UserInfo;
use App\UserType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserTypeFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */

     protected $model = UserType::class;

    /**
     * Define the model's default state.
     *
     */
    public function definition(): array
    {

        return [
            'user_type' => '',
            'status' => 1
        ];
    }

  
}
