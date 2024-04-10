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
        $newTrain->company = $faker->company;

        // una volta che compiliamo i campi dobbiamo salvare la riga per applicare le modifiche
        $newTrain->save();

        // dobbiamo chiamare qui il seeder che abbiamo appena creato
        $this->call([
            TrainSeeder::class,
        ]);
    }
}
