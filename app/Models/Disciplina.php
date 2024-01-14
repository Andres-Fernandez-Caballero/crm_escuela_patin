<?php

// app/Models/Disciplina.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
@deprecated
*/
class Disciplina extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'monto'];


}


