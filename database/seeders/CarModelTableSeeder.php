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
        $car->autonomia = 200;
        $car->aceleracion = 1.8;
        $car->velocidad_maxima = 208;
        $car->caballos = 300;
        $car->coeficiente = 0.208;
        $car->tren_motriz = "duo";
        $car->llantas = "\"19\" o \"22\"";
        $car->capacidad = 200;
        $car->maletero = 160;
        $car->peso = 5078.58;
        $car->description2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $car->save();
    }
}
