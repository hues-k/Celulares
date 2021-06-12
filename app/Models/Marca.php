<?php

namespace App\Models;
use App\Models\Celulare;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected   $table = 'marcas';
    use HasFactory;

    //funcion de uno a mucho
    public function modelos(){

return $this->hasMany(Celulare::class);

    }
}
