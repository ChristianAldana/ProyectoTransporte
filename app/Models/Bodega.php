<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bodega extends Model
{

//    Parte codificada christian
    protected $table = 'bodega';
    protected $primaryKey = 'id_bodega';
    public $timestamps = true;

    public function predio()
    {
        return $this->belongsTo('App\Models\Predio', 'id_predio');
    }
}
