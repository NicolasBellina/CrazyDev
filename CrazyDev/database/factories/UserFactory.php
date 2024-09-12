<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'age' => fake()->numberBetween(1, 500),
            'height' => fake()->optional()->randomFloat(1, 155, 195),
            'weight' => fake()->optional()->randomFloat(1, 45, 120),
            'planet' => fake()->randomElement([
            'Zarkona Prime', 'Vurox III', 'Klynthor', 'Nexal V', 'Urk\'tal', 
            'Drosna Beta', 'Fjornis IX', 'Bex\'char', 'Y\'narra', 'Lontys']), // Planète fictive
            'language' => fake()->randomElement([
            'Zyntharn', 'Oolbian', 'Xorrish', 'Dralk', 'Vintar', 
            'Kytherian', 'Praxan', 'Maldorn', 'Reklith', 'Xelvarian']), // Langue fictive
            'avatar_path' => fake()->randomElement([
                'img/avatar/par_default.png',
                'img/avatar/Alien_1.png',
                'img/avatar/Alien_2.png',
                'img/avatar/Alien_3.png',
                'img/avatar/Alien_4.png',
                'img/avatar/Alien_5.png',
                'img/avatar/Alien_6.png',
            ]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
