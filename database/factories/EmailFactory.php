<?php

namespace Database\Factories;

use App\Models\Email;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Email::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'subject' => $this->faker->name(),
            'company' => $this->faker->name(),
            'service' => $this->faker->name(),
            'phone' => $this->faker->randomNumber(),
            'description' => $this->faker->paragraph()
        ];
    }
}
