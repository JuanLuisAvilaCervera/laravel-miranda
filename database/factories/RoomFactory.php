<?php

namespace Database\Factories;

use App\Models\Room;
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
            'room_number' => fake()->randomNumber(3,true),
            'room_type' => fake()->randomElement(['Single' , 'Double' , 'Double Superior' , 'Suite']),
            'description' =>  fake()->sentence(15),
            'offer' => fake()->boolean() ,
            'price' => fake()-> randomFloat(2, 10 , 100),
            'discount' => fake()-> randomFloat(2, 0 , 1) ,
            'cancellation_policy' => fake()-> paragraph(2)
        ];
    }
}
