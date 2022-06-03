<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comprastemp extends Model
{
    use HasFactory;

    public function carritos(){

        return $this->hasOne('App\Models\Carritos');
    }
}
