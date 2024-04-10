<?php

namespace Database\Seeders;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// questa riga dobbiamo aggiungerla noi
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        // creiamo un'istanza della classe film (nuova riga)
        $newTrain = new Train();
        $newTrain->company = $faker->company();
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_time = $faker->time();
        $newTrain->arrival_time = $faker->time();
        $newTrain->train_code = $faker->unixTime();
        $newTrain->number_of_carriages = 6;

        // una volta che compiliamo i campi dobbiamo salvare la riga per applicare le modifiche
        $newTrain->save();

        
    }
}
