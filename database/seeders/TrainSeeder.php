<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for( $i = 0; $i < 100; $i++ ) {
        $train = new Train;
        $train->image = 'https://picsum.photos/300/500';    
        $train->Azienda = $faker->company();
        $train->Stazione_di_partenza = $faker->city();
        $train->Stazione_di_arrivo = $faker->city();
        $train->Orario_di_partenza = $faker->time();
        $train->Orario_di_arrivo = $faker->time();
        $train->Codice_Treno = $faker->ean8();
        $train->Numero_Carrozze = $faker->randomDigitNotNull();
        $train->In_orario = $faker->boolean();
        $train->Cancellato = $faker->boolean();

        $train->save(); 
        }
    }
}