<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;


    //Tabla
    protected $table = "articulos";

    //columnas de uso masivo
    protected $fillable = [
        'descripcion',
        'precio',
        'stock'
    ];

}
