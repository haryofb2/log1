<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interest extends Model
{
    //
    protected $table = 'interests';

    public function member()
    {
        return $this->hasMany('App\member');
    }
}
