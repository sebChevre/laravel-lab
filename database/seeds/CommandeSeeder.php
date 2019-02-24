<?php

use App\Domaine\Entite\Commande;
use Illuminate\Database\Seeder;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Domaine\Entite\Commande::truncate();

        $faker = Faker\Factory::create();


        Commande::create([
            'noCommande' => "cmd-0001"


        ]);

        for($i = 0;$i < 1000; $i++){
            Commande::create([
                'noCommande' => "cmd-000".$i


            ]);
        }
    }
}
