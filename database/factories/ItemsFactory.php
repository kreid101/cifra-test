<?php

namespace Database\Factories;

use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemsFactory extends Factory
{
    protected $model = Items::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_name'=>fake()->word(),
            'price'=>fake()->randomNumber(4,true),
            'image_path'=>fake()->imageUrl(600,800)
        ];
    }
}
