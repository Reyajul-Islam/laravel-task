<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hostel;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Md. Reyajul Islam',
             'email' => 'reyajul255@gmail.com',
             'password' => Hash::make('12345678')
         ]);

         Hostel::insert([
             [
                 'name' => 'Salimullah Muslim Hall',
                 'location' => 'Dhaka University',
                 'total_room' => 200,
                 'available_rooms' => 150
             ],[
                 'name' => 'Jagannath Hall',
                 'location' => 'Dhaka University',
                 'total_room' => 200,
                 'available_rooms' => 200
             ],[
                 'name' => 'Mir Mosharrof Hossain Hall',
                 'location' => 'Jahangirnagar University',
                 'total_room' => 200,
                 'available_rooms' => 125
             ],[
                 'name' => 'Al Beruni Hall',
                 'location' => 'Jahangirnagar University',
                 'total_room' => 200,
                 'available_rooms' => 115
             ]
         ]);
    }
}
