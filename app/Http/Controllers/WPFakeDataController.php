<?php

namespace App\Http\Controllers;

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

                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ];
        }

        WPPersons::insert($data);
    }
}
