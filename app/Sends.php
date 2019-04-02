<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sends extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreDest', 'remitente', 'destino','peso','dimensiones','costo','estado','user_id','repartidor_id',
    ];
}
