<?php

namespace App\Http\Controllers;

use App\Model\WPClients;
use App\Model\WPPersons;
use Faker\Factory;
use Illuminate\Http\Request;

class WPFakeDataController extends Controller
{
    public function generatePersons(int $count = 5)
    {
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < $count; $i++) {
            $data[] = [
                'id' => $faker->uuid,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ];
        }
        WPPersons::insert($data);
    }

    public function generateClients(int $count = 5)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            WPClients::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'client_type' => $faker->randomElement(['J', 'F'])
            ]);
        }

    }


}
