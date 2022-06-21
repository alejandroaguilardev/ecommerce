<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =$this->faker->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'code' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween($min = 50, $max = 300),
            'discount' => $this->faker->numberBetween($min = 0, $max = 40),
            'description_sort' => $this->faker->sentence(),
            'description_large' => $this->faker->paragraph(),
            'img' => $this->faker->name('empty.jpg'),
            'idcategory' => $this->faker->numberBetween($min = 1, $max = 3),
            'idtype' => $this->faker->numberBetween($min = 1, $max = 2),
            'status' => $this->faker->randomElement(['Activo','Inactivo'])
        ];
    }
}
