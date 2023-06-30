<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++){
            $newTrains = new Trains();
            $newTrains->azienda = $faker->word();
            $newTrains->stazione_di_partenza = $faker->sentence(2);
            $newTrains->stazione_di_arrivo = $faker->sentence(2);
            $newTrains->Codice_treno = $faker->lexify('tr-????');
            $newTrains->data_di_partenza = $faker->dateTimeInInterval('-1 days', '+10 days');;
            $newTrains->orario_di_partenza = $faker->dateTime();
            $newTrains->orario_di_arrivo = $faker->dateTime();
            $newTrains->numero_Carrozze = $faker->numberBetween(4, 15);
            $newTrains->in_orario = $faker->numberBetween(0, 60);
            $newTrains->cancellato = $faker->numberBetween(0, 1);
            $newTrains->save();
        }
    }
}
