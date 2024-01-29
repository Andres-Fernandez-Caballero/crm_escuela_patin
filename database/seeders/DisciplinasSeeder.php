<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Seeder;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Discipline::create([
            'nombre' => 'Iniciación 1 x sem',
            'monto' => 3000,
        ]);

        Discipline::create([
            'nombre' => 'Iniciación 2 x sem',
            'monto' => 2500 ,
        ]);
        Discipline::create([
            'nombre' => 'C libre',
            'monto' => 5000 ,
        ]);
        Discipline::create([
            'nombre' => 'B libre',
            'monto' => 5000 ,
        ]);
        Discipline::create([
            'nombre' => 'A libre',
            'monto' => 5000 ,
        ]);

        Discipline::create([
            'nombre' => 'C figuras',
            'monto' => 1000 ,
        ]);
        Discipline::create([
            'nombre' => 'B figuras',
            'monto' => 1000 ,
        ]);
        Discipline::create([
            'nombre' => 'A figuras',
            'monto' => 1000 ,
        ]);
        Discipline::create([
            'nombre' => 'Particular 1 x sem',
            'monto' => 3000 ,
        ]);
        Discipline::create([
            'nombre' => 'Particular 2 x sem',
            'monto' => 5000 ,
        ]);
        Discipline::create([
            'nombre' => 'Particular 3 x sem',
            'monto' => 8000 ,
        ]);
        Discipline::create([
            'nombre' => 'Particular 4 x sem',
            'monto' => 10000 ,
        ]);
        Discipline::create([
            'nombre' => 'Particular 5 x sem',
            'monto' => 13000 ,
        ]);

    }
}
