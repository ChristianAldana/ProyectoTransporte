<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingreso';
    protected $fillable = ['origen', 'fechaIn', 'horaIn', 'id_transportista', 'matricula', 'id_piloto', 'id_carga', 'id_predio', 'id_bodega' ];


    public function carga()
    {
        return $this->belongsTo('App\Models\Carga', 'id_carga');
    }

    public function camion()
    {
        return $this->belongsTo('App\Models\Camion', 'matricula');
    }

    public function transportista()
    {
        return $this->belongsTo('App\Models\Transportista', 'id_transportista');
    }

    public function piloto()
    {
        return $this->belongsTo('App\Models\Piloto', 'id_piloto');
    }

    public function predio()
    {
        return $this->belongsTo('App\Models\Predio', 'id_predio');
    }

    public function bodega()
    {
        return $this->belongsTo('App\Models\Bodega', 'id_bodega');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario');
    }
}
