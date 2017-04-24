<?php

namespace App\Http\Controllers;

use App\Model\WPClients;
use App\Model\WPClientsPersonsConnections;
use App\Model\WPClientsPersonsTypes;
use App\Model\WPLogins;
use App\Model\WPLoginsName;
use App\Model\WPPersons;
use App\Model\WPProjects;
use App\Model\WPProjectsLoginsConnection;
use App\Model\WPProjectsPersonsTypes;
use App\Model\WPProjectsPersonsTypesConnections;
use App\Model\WPProjectsTypes;
use Faker\Factory;
use Illuminate\Http\Request;

class WPFakeDataController extends Controller
{
    public function generatePersons(int $count = 5)
    {
        $faker = Factory::create('lt_LT');
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

    public function generateProjects(int $count = 3)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPProjects::create([
                'id' => $faker->uuid,
                'clients_id' => WPClients::all()->random()->id,
                'name' => $faker->randomElement(['Simple pr', 'Big data', 'Car_shop']),
                'type' => $faker->randomElement(['SASS', 'SHOP', 'WEB']),
                'description' => $faker->text
            ]);
        }
    }

    public function generateClientsPersonsType(int $count = 3)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPClientsPersonsTypes::create([
                'id' => $faker->uuid,
                'clients_persons_type' => $faker->randomElement(['manager', 'accountant', 'designers', 'people']),
                'name' => $faker->name,
                'description' => $faker->text
            ]);
        }
    }

    public function generateClientsPersonsConnections(int $count = 2)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPClientsPersonsConnections::create([
                'id' => $faker->uuid,
                'clients_id' => WPClients::all()->random()->id,
                'person_id' => WPPersons::all()->random()->id,
                'clients_persons_type_id' => WPClientsPersonsTypes::all()->random()->id,
                'comment' => $faker->text
            ]);
        }
    }

    public function generateLoginsName(int $count = 2)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPLoginsName::create([
                'id' => $faker->uuid,
                'name' => $faker->userName,
                'description' => $faker->text
            ]);
        }
    }

    public function generateLogins(int $count = 2)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPLogins::create([
                'id' => $faker->uuid,
                'logins_name_id' => WPLoginsname::all()->random()->id,
                'user' => $faker->userName,
                'password' => $faker->password,
                'login_url' => $faker->url
            ]);
        }
    }

    public function generateProjectsLoginsConnection(int $count = 2)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPProjectsLoginsConnection::create([
                'id' => $faker->uuid,
                'projects_id' => WPProjects::all()->random()->id,
                'logins_id' => WPLogins::all()->random()->id,
            ]);
        }
    }

    public function generateProjectsPersonsTypes(int $count = 2)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPProjectsPersonsTypes::create([
                'id' => $faker->uuid,
                'name' => $faker->userName,
                'description' => $faker->text
            ]);
        }
    }


    public function generateProjectsPersonsTypesConnections(int $count = 2)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPProjectsPersonsTypesConnections::create([
                'id' => $faker->uuid,
                'projects_id' => WPProjects::all()->random()->id,
                'persons_id' => WPPersons::all()->random()->id,
                'employe_types_id' => WPProjectsPersonsTypes::all()->random()->id,
                'comments' => $faker->text
            ]);
        }
    }

    public function generateProjectsTypes(int $count = 2)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            WPProjectsTypes::create([
                'id' => $faker->uuid,
                'project_id' => WPProjects::all()->random()->id,
                'name' => $faker->name,
                'types' => $faker->randomElement(['SASS', 'SHOP', 'WEB']),
                'description' => $faker->text
            ]);
        }
    }


}
