<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    protected $table = 'informe';

    protected $fillable = [
        'indicador',
        'titulo',
        'observacion',
        'respuesta',
    ];


    public function probatorios()
{
    return $this->belongsToMany(probatorio::class, 'informe_probatorio', 'informe_id', 'probatorio_id');
}
}
