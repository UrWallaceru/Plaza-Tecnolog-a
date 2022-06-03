<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carritos extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function compras_temp(){

        return $this->belongsTo('App\Models\Compras_temp');

        
    }
}
