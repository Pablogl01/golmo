<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gama;

class GamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gama = new Gama();
        $gama->name = "Deportivo";
        $gama->save();
        $gama = new Gama();
        $gama->name = "Berlina";
        $gama->save();
    }
}
