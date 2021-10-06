<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profetion extends Model
{
    //
    protected $table = 'profetions';

    public function member()
    {
        return $this->hasMany('App\member');
    }
}
