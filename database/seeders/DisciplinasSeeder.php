<?php

namespace Database\Seeders;

use App\Models\Disciplina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disciplina::create([
            'nombre' => 'intermedio',
            'monto' => 1000,
        ]);

        Disciplina::create([
            'nombre' => 'facil',
            'monto' => 2000,
        ]);

        Disciplina::create([
            'nombre' => 'nivel_argentina',
            'monto' => 3000,
        ]);

    }
}
