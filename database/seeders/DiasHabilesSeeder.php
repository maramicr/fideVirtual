<?php

namespace Database\Seeders;

use App\Models\diaHabil;
use Illuminate\Database\Seeder;

class DiasHabilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $oDiasHabiles = new diaHabil();
        $oDiasHabiles->dia_semana = 'Lunes';
        $oDiasHabiles->save();

        $oDiasHabiles2 = new diaHabil();
        $oDiasHabiles2->dia_semana = 'Martes';
        $oDiasHabiles2->save();

        $oDiasHabiles3 = new diaHabil();
        $oDiasHabiles3->dia_semana = 'Miércoles';
        $oDiasHabiles3->save();

        $oDiasHabiles4 = new diaHabil();
        $oDiasHabiles4->dia_semana = 'Jueves';
        $oDiasHabiles4->save();

        $oDiasHabiles5 = new diaHabil();
        $oDiasHabiles5->dia_semana = 'Viernes';
        $oDiasHabiles5->save();
    }
}
