<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
    

{

<<<<<<< HEAD
=======
    protected $table = 'ingreso';

    public function transportista()
    {
        return $this->belongsTo(Transportista::class);
    }

    public function camion()
    {
        return $this->belongsTo(Camion::class);
    }

    public function piloto()
    {
        return $this->belongsTo(Piloto::class);
    }

    public function carga()
    {
        return $this->belongsTo(Carga::class);
    }

    public function predio()
    {
        return $this->belongsTo(Predio::class);
    }

    public function bodega()
    {
        return $this->belongsTo(Bodega::class);
    }
>>>>>>> master
}
