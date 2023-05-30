<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
<<<<<<< HEAD


=======
    protected $table='camion';
    protected $primaryKey = 'matricula';
    protected $fillable = ['nombre', 'razon_social'];

    public function camiones()
    {
        return $this->hasMany('App\Camion', 'id_transporte', 'id_transporte');
    }
>>>>>>> master
}
