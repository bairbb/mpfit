<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;
    
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'description' =>$this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
