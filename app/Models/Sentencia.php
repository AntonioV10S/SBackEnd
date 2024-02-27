<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentencia extends Model
{
    use HasFactory;
    protected $table = 'sentencia';
    public $timestamps = false;
    protected $fillable = [
        'condena',
        'multa',
        'cedula',
        'id_ladron',
    ];

}
