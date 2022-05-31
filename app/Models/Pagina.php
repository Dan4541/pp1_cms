<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    use HasFactory;

    protected $table = "paginas";
    protected $primaryKey = "id_pagina";
    public $timestamps = false;

    public function imagenes(){
        return $this->hasMany(Imagen::class, 'id_pagina', 'id_pagina');
    }

}
