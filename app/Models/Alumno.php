<?php

// app/Models/Alumno.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'apellido', 'dni'];


    // Método para calcular el total pagado por el alumno
    public function totalPagado()
    {
        // Suma los totales de las cuotas pagadas del alumno
        return $this->cuotas()->where('estado_pago', 'pagada')->sum('total');
        
        // traer todos las cuotas de año en curso 
        // sumar las cuotas con estado pendiente o no_paga 
    }

    // Relación con las cuotas del alumno
    public function cuotas()
    {
        return $this->hasMany(Cuota::class);
    }

    // Relación con las disciplinas del alumno
    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class, 'alumno_disciplina');
    }
    

    public function crearCuotas()
    {
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        foreach ($meses as $mes) {
            $this->cuotas()->create([
                'mes' => $mes,
                'disciplinas' => $this->disciplinas,
                'estado_pago' => 'no_corresponde', // Puedes establecer el estado predeterminado que desees
            ]);
        }
    }
}