<?php

namespace Database\Seeders;
use App\Models\Room;
use Database\Factories\RoomFactory;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;





class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run(): void
    {
        Room::factory()->count(30)->create();
    }
}
