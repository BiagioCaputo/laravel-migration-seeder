<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->company(),
            'dep_station' => fake()-> streetName(),
            'arr_station' => fake()-> streetName(),
            'dep_time' => fake()-> time(),
            'arr_time' => fake()-> time(),
            'train_code' => fake()-> ean13(),
            'train_wagons' => fake()-> numberBetween(0, 20),
            'on_time' => fake()->numberBetween(0, 1) ,
            'deleted' => fake()->numberBetween(0, 1),
        ];
    }
}
