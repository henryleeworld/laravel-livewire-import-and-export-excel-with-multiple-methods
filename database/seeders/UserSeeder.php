<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
//        User::factory(10000)->create();

        $faker = Factory::create();
        $data = [];

        for ($i = 0; $i < 100000; $i++) {
            $data[] = [
                'name'              => $faker->name(),
                'email'             => $faker->unique()->safeEmail(),
                'password'          => Hash::make('password'),
            ];
        }

        $chunks = array_chunk($data, 5000);

        foreach ($chunks as $chunk) {
            User::insert($chunk);
        }
    }
}
