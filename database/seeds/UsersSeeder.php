<?php

use Illuminate\Database\Seeder;
use App\Domaine\Entite\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domaine\Entite\User::truncate();

        $faker = Faker\Factory::create();

        $password = \Illuminate\Support\Facades\Hash::make('test');

        User::create([
            'name' => "Administrator",
            'email'=> "seb.chevre@gmail.com",
            'password' => $password

        ]);

        for($i = 0;$i < 100; $i++){
            User::create([
                'name' => $faker->name,
                'email'=> $faker->email,
                'password' => $password

            ]);
        }
    }
}
