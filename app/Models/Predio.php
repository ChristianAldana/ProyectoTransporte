<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predio';
    protected $primaryKey = 'id_predio';
    public $timestamps = true;

}
