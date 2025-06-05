<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{

    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => $faker->randomNumber(3,true),
            'description' =>  $faker->sentence(15),
            'offer' => $faker->boolean() ,
            'price' => $faker-> randomFloat(2, 10 , 100),
            'discount' => $faker-> randomFloat(2, 0 , 1) ,
            'cancellation_policy' => $faker-> paragraph(2)
        ];
    }
}
