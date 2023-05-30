<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{

    //    Parte codificada christian

    protected $table = 'camion';
    protected $primaryKey = 'id_matricula';
    public $incrementing = false;
    public $timestamps = false;

    public function transportista()
    {
        return $this->belongsTo('App\Models\Transportista', 'id_transportista');
    }
}
