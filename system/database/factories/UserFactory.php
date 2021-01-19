<?php

namespace Database\Factories;

use  App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->username,
            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'jk' => 1 || 0,
            'password' =>'$2y$10$J6SjHykWD3MzBe5E9.prHu./TybLRgRlvEhS9JuWObTA8HJcJcDU.', // password
            'remember_token' => Str::random(10),
        ];
    }
}
