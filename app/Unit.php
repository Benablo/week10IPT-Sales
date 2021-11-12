<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function merchandices()
    {  
        return $this->hasOne('App\Merchandice');
    }
}
