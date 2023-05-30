<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    protected $table = 'egreso';
    protected $primaryKey = 'id_egreso';
    public $timestamps = true;

    public function carga()
    {
        return $this->belongsTo('App\Models\Carga', 'id_carga');
    }

    public function transportista()
    {
        return $this->belongsTo('App\Models\Transportista', 'id_transportista');
    }

    public function predio()
    {
        return $this->belongsTo('App\Models\Predio', 'id_predio');
    }

    public function bodega()
    {
        return $this->belongsTo('App\Models\Bodega', 'id_bodega');
    }

    public function camion()
    {
        return $this->belongsTo('App\Models\Camion', 'id_matricula');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario');
    }

}
