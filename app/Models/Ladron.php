<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ladron extends Model
{
    use HasFactory;
    protected $table = 'ladron';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'delito',
        'id_policia'
    ];
}
