<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Discipline extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'monto'];

    public function alumnos()
    {
        return $this->morphedByMany(Alumno::class, 'disciplinable');
    }

    public function cuotas()
    {
        return $this->morphedByMany(Cuota::class, 'disciplinable');
    }
}
