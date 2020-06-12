<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';

     public function Users()
    {
        return $this->hasMany( 'App\User', 'rol_id', 'rol_id' );
    }
}
