<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class probatorio extends Model
{
     use HasFactory;

    // Forzar el nombre de la tabla
    protected $table = 'probatorio';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'codigo',
        'nombre',
        'enlace',
      
    ];

    public function informes()
{
    return $this->belongsToMany(Informe::class, 'informe_probatorio', 'probatorio_id', 'informe_id');
}
}
