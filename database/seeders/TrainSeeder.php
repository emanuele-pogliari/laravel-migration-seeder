<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->company = 'Trenitalia';
        $newTrain->departure_station = 'Agrigento';
        $newTrain->arrival_tation = 'Palermo';
        $newTrain->departure_time = '11:00';
        $newTrain->arrival_time = '14.00';
        $newTrain->train_code = 'H6RF';
        $newTrain->number_of_coaches  = '5';
        $newTrain->on_time = false;
        $newTrain->cancelled = true;

        $newTrain->save();
    }
}
