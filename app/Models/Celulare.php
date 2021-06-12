<?php

namespace App\Models;
use App\Models\Marca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celulare extends Model
{
    protected $fillable = ['marca_id','Modelo','Precio','Almacenamiento','Ram','Expandible','Pantalla','Resolucion','Bateria','Procesador','Nucleos','Camaras','SO','Colores','Foto'];
    use HasFactory;

    public function marca(){

        return  $this-> belongsTo(Marca::class); 
    }
}

