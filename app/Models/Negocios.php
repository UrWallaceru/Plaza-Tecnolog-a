<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'numLocal',
    ];
    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function productos(){

        return $this->hasMany(Productos::class, 'negocio_producto');
    
    }
}