<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory As Faker;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   DB::table('employee')->insert([

        //     ['code_employe' => ''],
        //     ['img_cover' => ''],
        //     ['name' => ''],
        //     ['role' => ''],
        //     ['cccd' => ''],
        //     ['phone_number' => ''],
        //     ['birthday' => ''],
        //     ['code_dm' => ''],
        //     ['code_timesheet' => ''],
        //     ['code_bonus' => ''],
        //     ['code_salary' => ''],

        //   ]);
          $faker = Faker::create();
          foreach (range(1,5) as $value) {
          DB::table('employee')->insert(
          [
            'code_employee' => $faker->numberBetween($min = 10000, $max = 90000),
            'img_cover' => rand(1,10).".png",
            'name' => $faker->firstNameMale ,
            'type' => 0,
            'title' => $faker->jobTitle ,
            'sex' => rand(0,2),
            'cccd' => $faker->ean13,
            'phone_number' => $faker->phoneNumber,
            'address' =>  $faker->address,
            'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'code_dm' => $faker->numberBetween($min = 10000, $max = 90000),
            'code_timesheet' => $faker->numberBetween($min = 10000, $max = 90000),
            'code_bonus' => $faker->numberBetween($min = 10000, $max = 90000),
            'code_salary' => $faker->numberBetween($min = 10000, $max = 90000),
          ]
          );
        }
    }
}
