<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected static ?string $password;
    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstname(),
            'lastname' => fake()->lastname(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'mobileno' => fake()->unique()->phoneNumber(),
            'password' => static::$password ??= Hash::make('password'),
            'address' => fake()->address(),

        ];
    }
}
