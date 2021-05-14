<?php

namespace Database\Seeders;
use App\Models\CarModel;

use Illuminate\Database\Seeder;

class CarModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car = new CarModel();
        $car->name = 'HURACÁN EVO FLUO CAPSULE';
        $car->price = 200000.00;
        $car->gama_id = 1;
        $car->description = "La Huracán EVO Fluo Capsule ofrece un nuevo enfoque del diseño EVO con un sorprendente esquema exterior bicolor, que actualiza el aspecto del coche y realza los detalles.";
        $car->save();
    }
}
