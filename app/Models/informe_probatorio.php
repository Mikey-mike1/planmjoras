<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class informe_probatorio extends Model
{
    use HasFactory;
    protected $table = 'informe_probatorio';

    protected $fillable = [
        'informe_id',
        'probatorio_id',
    ];
}
