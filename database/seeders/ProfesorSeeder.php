<?php

namespace Database\Seeders;

use App\Models\profesor;

use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $oProfesor = new profesor();
        $oProfesor->nombre = 'Eduardo';
        $oProfesor->primer_apellido = 'González';
        $oProfesor->segundo_apellido = 'Paniagua';
        $oProfesor->save();

        $oProfesor2 = new profesor();
        $oProfesor2->nombre = 'Carmen';
        $oProfesor2->primer_apellido = 'Paniagua';
        $oProfesor2->segundo_apellido = 'Lépiz';
        $oProfesor2->save();

        $oProfesor3 = new profesor();
        $oProfesor3->nombre = 'Wilberth';
        $oProfesor3->primer_apellido = 'Molina';
        $oProfesor3->segundo_apellido = 'López';
        $oProfesor3->save();

        profesor::factory(50)->create();
    }
}
