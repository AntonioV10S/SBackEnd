<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policia extends Model
{
    use HasFactory;
    protected $table = 'policia';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'rango',
    ];
}
