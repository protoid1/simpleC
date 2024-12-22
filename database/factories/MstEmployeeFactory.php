<?php

namespace Database\Factories;

use App\Models\MstEmployee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MstEmployee>
 */
class MstEmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ? string  $password ;
    public function definition(): array
    {
        // $customId = new MstEmployee;
        // $customId->getIncrementing();
        return [
            // 'employee_id' => $customId, 
            'employee_name' => fake()->name(),
            'employee_email' => fake()->unique()->safeEmail(),
            'employee_password' => static::$password ??= Hash::make('password'),
            'employee_phone' => fake()->phoneNumber(),
            'employee_role' => 'admin',
            'employee_unit' => 'HR',
            'email_verified_at' => now(),
            'employee_remember_token' => Str::random(10),
        ];
    }
}
