<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{

    protected $table = 'piloto';
    protected $primaryKey = 'id_piloto';
    public $timestamps = true;
}
